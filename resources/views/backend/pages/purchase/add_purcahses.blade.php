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
                    <form action="{{ route('store.purchase') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" name="date" class="form-control" id="" required>
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">suppliers</label>
                            <select name="supplier_id" id="" class="form-control" required>
                                <option value="">Select Suppliers</option>
                                @foreach ($suppliers as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Invoice No</label>
                            <input type="text" name="invoice_no" class="form-control" placeholder="Enter Invoice No" id="" required>
                            @error('invoice_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="">Product Code</label>
                            <select name="product_code" class="form-control" id="productCode">
                                <option value="">Select Product Code</option>
                                @foreach ($products as $row)
                                    <option value="{{ $row->product_code }}">{{ $row->product_code }}</option>
                                @endforeach
                            </select>
                            @error('product_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">Product Description</label>
                            <textarea name="product_description" id="productDescription" cols="15" rows="5" class="form-control" required>


                            </textarea>
                            @error('product_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" min="0" name="qty" class="form-control" placeholder="Enter Quantity" required>
                            @error('qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Rate</label>
                            <input type="text" name="rate" class="form-control" placeholder="Enter Rate" required>
                            @error('rate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Payment</label>
                            <input type="text" name="payment" class="form-control" placeholder="Enter Payment" required>
                            @error('payment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit">Purcahses</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#productCode").change(function(){
                var product_code = $("#productCode").val();
                $.ajax({
                        url: "http://127.0.0.1:8000/api/get-product/" + product_code,
                        dataType: 'json',
                        success: function(data){
                            document.getElementById("productDescription").innerHTML = data.product.product_description
                            console.log(data.product.product_description)
                        }
                    });


            });
        });
    </script>
@endsection
