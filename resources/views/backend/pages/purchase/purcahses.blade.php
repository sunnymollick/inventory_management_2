@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="text-center text-dark">All Purchase List
            <a href="{{ route('add.purchase.list') }}" class="btn btn-info" style="float: right">Add Purchase </a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="dataTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Date</th>
                <th scope="col">Supplier</th>
                <th scope="col">Invoice No.</th>
                <th scope="col">Product Code </th>
                <th scope="col">Product Description </th>
                <th scope="col">Quantity</th>
                <th scope="col">Rate</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>


            @php($i = 1)

            @foreach ($purchases as $row)
            <tr>
                <th>{{ $i++ }}</th>
                <td>{{ $row->date }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->invoice_no }}</td>
                <td>{{ $row->product_code }}</td>
                <td>{{ $row->product_description }}</td>
                <td>{{ $row->qty }}</td>
                <td>{{ $row->rate }}</td>
                <td>{{ $row->qty * $row->rate }}</td>
                <td>{{ $row->payment }}</td>
                <td>Delete</td>
              </tr>
            @endforeach
            </tbody>
          </table>

    </div>
</div>
@endsection
