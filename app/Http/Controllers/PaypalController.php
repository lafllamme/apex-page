<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use App\Models\Payment;
use App\Models\Product;


class PayPalController extends Controller
{
    public function createTransaction()
    {
        return view('welcome');
    }

    public function processTransaction(Request $request)
    {

        $ticketId = $request->ticket;

        if ($ticketId && $ticketId == 1) {
            $amount = 15;
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

        //FIX ME: find better solution
        $cleanedArr = flatten($response);
        $transactionCode = $cleanedArr[17];
        $personName = $cleanedArr[5] . ' ' . $cleanedArr[6];
        $email = $cleanedArr[2];
        $amount = $cleanedArr[23];

        $msg = $cleanedArr[18];

        $data = [
            'firstname' => $cleanedArr[5],
            'lastname' => $cleanedArr[6],
            'email' => $email,
            'price' => $cleanedArr[28],
            'token' => $transactionCode,
            'message' => $msg
        ];

        Product::create($data);

        $qrData = [
            $personName, $email, $amount, $transactionCode
        ];

        $shortString = [$qrData[0], $qrData[3]];
        $qrString = implode("|", $shortString);
        $qrcode = QrCode::size(500)
            ->style('dot')
            ->eye('circle')
            //->gradient(131, 58, 180, 53, 159, 196, 'radial')
            ->errorCorrection('H')
            ->generate($qrString);

        $date = date("Ymd");

        $fileName = $transactionCode . "QrCode.svg";
        $folderName = "transaction/" . $date . "/" . $fileName;
        $finalFolderName = str_replace(' ', '', $folderName);


        Storage::disk('public')->put($finalFolderName, $qrcode);
        $url = Storage::url($finalFolderName);

        $payment = new Payment;
        $payment->transactionId = $transactionCode;
        $payment->name = $personName;
        $payment->amount = $amount;
        $payment->email = $email;
        $payment->save();

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
