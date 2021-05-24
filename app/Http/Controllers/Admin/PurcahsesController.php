<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Purcahse;
use App\Models\Admin\Supplier;

class PurcahsesController extends Controller{
    public function purcahses(){
        $purchases = Purcahse::join('suppliers','purcahses.supplier_id','suppliers.id')
                                    ->select('purcahses.*','suppliers.name')
                                    ->get();


        return view('backend.pages.purchase.purcahses',['purchases'=>$purchases]);
    }
    public function addPurcahses(){
        $suppliers = Supplier::all();
        return view('backend.pages.purchase.add_purcahses',['suppliers'=>$suppliers]);
    }

    public function storePurcahses(Request $request){
        $validated = $request->validate([
            'date' => 'required|date',
            'supplier_id' => 'required',
            'invoice_no' => 'required',
            'product_code' => 'required',
            'product_description' => 'required',
            'qty' => 'required',
            'rate' => 'required',
            'payment' => 'required',
        ]);

        $purchase = new Purcahse();
        $purchase->date = $request->date;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->invoice_no = $request->invoice_no;
        $purchase->product_code = $request->product_code;
        $purchase->product_description = $request->product_description;
        $purchase->qty = $request->qty;
        $purchase->rate = $request->rate;
        $purchase->payment = $request->payment;
        if ($purchase->save()) {
            $notification=array(
                'messege'=>'Purchase Added',
                'alert-type'=>'success'
                 );
            return redirect('purcahses')->with($notification);
        }
    }
}
