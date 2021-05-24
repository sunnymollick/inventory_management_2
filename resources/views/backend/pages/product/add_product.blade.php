@extends('backend.layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-dark">Add Purchase
                <a href="{{ route('all.products') }}" class="btn btn-info" style="float: right">All Product</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('store.product') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Product Code</label>
                            <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code" id="" required>
                            @error('product_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Product Description</label>
                            <textarea name="product_description" id="" cols="15" rows="5" class="form-control" required>


                            </textarea>
                            @error('product_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Opening Quantity</label>
                            <input type="number" min="0" value="0" name="opening_qty" class="form-control" placeholder="Enter Quantity" required>
                            @error('opening_qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for=""> Purchase Quantity</label>
                            <input type="number" min="0" value="0" name="purchase_qty" class="form-control" placeholder="Enter Quantity" required>
                            @error('purchase_qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Sales Quantity </label>
                            <input type="number" min="0" value="0" name="sales_qty" class="form-control" placeholder="Enter Quantity" required>
                            @error('sales_qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for=""> Closing Quantity</label>
                            <input type="number" min="0" value="0" name="closing_qty" class="form-control" placeholder="Enter Quantity" required>
                            @error('closing_qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
