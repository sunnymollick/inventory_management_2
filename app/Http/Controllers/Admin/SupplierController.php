<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Supplier;

class SupplierController extends Controller{
    public function allSuppliers(){
        $suppliers = Supplier::all();
        return view('backend.pages.suppliers.suppliers',['suppliers'=>$suppliers]);
    }

    public function createSuppliers(){
        return view('backend.pages.suppliers.create');
    }

    public function storeSuppliers(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'opening_bal' => 'integer',
            'purchase' => 'integer',
            'payment' => 'integer',
            'closing_bal' => 'integer',
        ]);

        $supplier = new Supplier();
        $supplier->name = $request->name ;
        $supplier->opening_bal = $request->opening_bal ;
        $supplier->purchase = $request->purchase ;
        $supplier->payment = $request->payment ;
        $supplier->closing_bal = $request->closing_bal ;
        if ($supplier->save()) {
            return redirect('all/suppliers');
        }
    }
}
