<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{

    public function qrcode(Request $request)
    {
        //dd($request->all());
        $qrcode=QrCode::generate('https://websolutionstuff.com', '../public/QRCode.svg');
        return redirect()->route('home')->with('qrcode', $qrcode);
    }
}
