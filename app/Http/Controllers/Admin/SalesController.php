<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Sale;
use App\Models\Admin\Supplier;

class SalesController extends Controller
{
    public function sales(){
        $sales = sale::join('suppliers','sales.supplier_id','suppliers.id')
                                    ->select('sales.*','suppliers.name')
                                    ->get();


        return view('backend.pages.sale.sales',['sales'=>$sales]);
    }
    public function addSales(){
        $suppliers = Supplier::all();
        return view('backend.pages.sale.add_sales',['suppliers'=>$suppliers]);
    }

    public function storeSales(Request $request){
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

        $sale = new sale();
        $sale->date = $request->date;
        $sale->supplier_id = $request->supplier_id;
        $sale->invoice_no = $request->invoice_no;
        $sale->product_code = $request->product_code;
        $sale->product_description = $request->product_description;
        $sale->qty = $request->qty;
        $sale->rate = $request->rate;
        $sale->payment = $request->payment;
        if ($sale->save()) {
            $notification=array(
                'messege'=>'Sale added',
                'alert-type'=>'success'
                 );
            return redirect('sales')->with($notification);
        }
    }
}
