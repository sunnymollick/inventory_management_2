<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PurcahsesController;
use App\Http\Controllers\Admin\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('backend.layouts.single');
// });

// login and register routes go here

Route::get('/',[AuthController::class,'login'])->name('/');
Route::get('register',[AuthController::class,'register'])->name('register');

// Backend routes go here

Route::get('dashboard', function () {
    return view('backend.pages.dashboard');
});

// All Purchase Routes Go Here

Route::get('purcahses',[PurcahsesController::class,'purcahses'])->name('purcahses');
Route::get('add/purcahses/list',[PurcahsesController::class,'addPurcahses'])->name('add.purchase.list');

// All Supplier Routes Go Here

Route::get('all/suppliers',[SupplierController::class,'allSuppliers'])->name('all.suppliers');
Route::get('create/suppliers',[SupplierController::class,'createSuppliers'])->name('add.supplier');
Route::post('store/suppliers',[SupplierController::class,'storeSuppliers'])->name('store.supplier');
