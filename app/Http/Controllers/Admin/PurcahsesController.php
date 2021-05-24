<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurcahsesController extends Controller{
    public function purcahses(){
        return view('backend.pages.purcahses');
    }
}
