<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

class PayPalController extends Controller
{
    public function createTransaction()
    {
        return view('welcome');
    }

    public function processTransaction(Request $request)
    {
        $ticketId = $request->ticket;
        // $pic = file_get_contents('storage/APEX.png');
        // dd($pic);

        if ($ticketId === 'ticket-1') {
            $amount = 15.99;
        } else if ($ticketId === 'ticket-2') {
            $amount = 17.99;
        } else if ($ticketId === 'ticket-3') {
            $amount = 20;
        }

        $totalValue = round(($amount * 1.05), 2);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();


        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => $totalValue
                    ],

                ],
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        //$status = $provider->registerPaymentInvoice($invoice_no, $payment_date, $payment_method, $amount);



        function flatten($array)
        {
            $return = array();
            while (count($array)) {
                $value = array_shift($array);
                if (is_array($value))
                    foreach ($value as $sub)
                        $array[] = $sub;
                else
                    $return[] = $value;
            }
            return $return;
        }

        $cleanedArr = flatten($response);
        $transactionCode = $cleanedArr[17];

        $qrcode = QrCode::size(500)
            ->style('round')
            //->gradient(131, 58, 180, 53, 159, 196, 'radial')
            ->backgroundColor(138, 43, 226)
            ->errorCorrection('H')
            ->generate($transactionCode);

        $date = date("Ymd");

        $fileName = $transactionCode."QrCode.svg";
        $folderName = "transaction/" . $date . "/" . $fileName;
        $finalFolderName = str_replace(' ', '', $folderName);
    
     
        Storage::disk('public')->put($finalFolderName, $qrcode);
        $url = Storage::url($finalFolderName);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.')
                ->with('url', $url);
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
