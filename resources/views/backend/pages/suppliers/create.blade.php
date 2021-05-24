@extends('backend.layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-dark">Create Supplier
                <a href="{{ route('all.suppliers') }}" class="btn btn-info" style="float: right">All Supplier</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('store.supplier') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter Suppliers Name" value="{{ old('name') }}" class="form-control" id="" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Opening Balance</label>
                            <input type="number" name="opening_bal" class="form-control" value="0" placeholder="Enter Opening Balance">
                            @error('opening_bal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Purchase</label>
                            <input type="number" name="purchase" class="form-control" value="0" placeholder="Enter Purchase Amount" id="">
                            @error('purchase')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Payment</label>
                            <input type="number" name="payment" class="form-control" value="0" placeholder="Enter Paid Amount" id="">
                            @error('payment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Closing Balance</label>
                            <input type="number" name="closing_bal" class="form-control" value="0" placeholder="Enter Closing Balance">
                            @error('closing_bal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit">Create Suppliers</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
