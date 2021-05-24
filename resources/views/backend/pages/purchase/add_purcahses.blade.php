@extends('backend.layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-dark">Add Purchase
                <a href="{{ route('purcahses') }}" class="btn btn-info" style="float: right">Purchase List</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="" method="">
                        @csrf
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" name="date" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">suppliers</label>
                            <select name="supplier_id" id="" class="form-control">
                                <option value="">Select Suppliers</option>
                                @foreach ($suppliers as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Invoice No</label>
                            <input type="text" name="invoice_no" class="form-control" placeholder="Enter Invoice No" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Product Code</label>
                            <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Product Description</label>
                            <textarea name="product_description" id="" cols="15" rows="5" class="form-control" >

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" min="0" name="qty" class="form-control" placeholder="Enter Quantity">
                        </div>
                        <div class="form-group">
                            <label for="">Rate</label>
                            <input type="text" name="rate" class="form-control" placeholder="Enter Rate">
                        </div>
                        <div class="form-group">
                            <label for="">Payment</label>
                            <input type="text" name="payment" class="form-control" placeholder="Enter Payment">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit">Purcahses</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
