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
}
