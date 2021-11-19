<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class GuestController extends Controller
{
    public function index()
    {
        $payments = Payment::all()->toArray();
        //dd($payment);

        return view('list')->with('payments', $payments);
    }

    public function edit($id, Request $request)
    {
        $obj = Payment::findOrFail($id);
        $checked = $request->has('checked');
        if (!empty($checked)) {
            $obj->checked = 1;
        }
        else {
            $obj->checked = 0;
        }
        $obj->save();

        return redirect()->route('guests');
    }
    
    public function delete($id, Request $request){
        $obj = Payment::findOrFail($id);
        $obj->delete();

        return redirect()->route('guests');
    }
}
