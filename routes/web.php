<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PurcahsesController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\CustomerController;

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

Route::post('login',[AuthController::class,'loginStore'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'registerStore'])->name('register.store');


// Backend routes go here

Route::group(['middleware' => 'checkloggedin'], function(){


Route::get('dashboard', function () {
    return view('backend.pages.dashboard');
});

// All Purchase Routes Go Here
Route::get('purcahses',[PurcahsesController::class,'purcahses'])->name('purcahses');
Route::get('add/purcahses/list',[PurcahsesController::class,'addPurcahses'])->name('add.purchase.list');
Route::post('store/purcahses',[PurcahsesController::class,'storePurcahses'])->name('store.purchase');

// All Supplier Routes Go Here

Route::get('all/suppliers',[SupplierController::class,'allSuppliers'])->name('all.suppliers');
Route::get('create/suppliers',[SupplierController::class,'createSuppliers'])->name('add.supplier');
Route::post('store/suppliers',[SupplierController::class,'storeSuppliers'])->name('store.supplier');

// All Sale Routes Go Here
Route::get('sales',[SalesController::class,'sales'])->name('sales');
Route::get('add/sales/list',[SalesController::class,'addSales'])->name('add.sale.list');
Route::post('store/sales',[SalesController::class,'storeSales'])->name('store.sale');

// All Customer Routes Go Here

Route::get('all/customers',[CustomerController::class,'allCustomers'])->name('all.customers');
Route::get('create/customers',[CustomerController::class,'createCustomers'])->name('add.customer');
Route::post('store/customers',[CustomerController::class,'storeCustomers'])->name('store.customer');


});

