<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Customer;

class CustomerController extends Controller
{
    public function allCustomers(){
        $customers = Customer::all();
        return view('backend.pages.customers.customers',['customers'=>$customers]);
    }

    public function createCustomers(){
        return view('backend.pages.customers.create');
    }

    public function storeCustomers(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'opening_bal' => 'integer',
            'purchase' => 'integer',
            'payment' => 'integer',
            'closing_bal' => 'integer',
        ]);

        $customer = new Customer();
        $customer->name = $request->name ;
        $customer->opening_bal = $request->opening_bal ;
        $customer->purchase = $request->purchase ;
        $customer->payment = $request->payment ;
        $customer->closing_bal = $request->closing_bal ;
        if ($customer->save()) {
            $notification=array(
                'messege'=>'Customer added',
                'alert-type'=>'success'
                 );
            return redirect('all/customers')->with($notification);
        }
    }
}
