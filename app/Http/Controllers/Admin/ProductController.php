<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;

class ProductController extends Controller{
    public function allProducts(){
        $products = Product::all();
        return view('backend.pages.product.products',['products'=>$products]);
    }

    public function addProducts(){
        return view('backend.pages.product.add_product');
    }

    public function storeProduct(Request $request){
        $product = new Product();
        $product->product_code = $request->product_code;
        $product->product_description = $request->product_description;
        $product->opening_qty = $request->opening_qty;
        // $product->purchase_qty = $request->purchase_qty;
        // $product->sales_qty = $request->sales_qty;
        $product->closing_qty = $request->opening_qty;
        if ($product->save()) {
            return redirect('all/products');
        }
    }

    public function getProductDescription($product_code){
        $product = Product::where('product_code',$product_code)->first();
        return response()->json([
            'product' => $product
        ]);
    }
}
