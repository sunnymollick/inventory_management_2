@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="text-center text-dark">All Product List
            <a href="{{ route('add.products') }}" class="btn btn-info" style="float: right">Add Product </a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="dataTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Product Code</th>
                <th scope="col">Product Description</th>
                <th scope="col">Opening Quantity</th>
                <th scope="col">Purchase Quantity </th>
                <th scope="col">Sales Quantity </th>
                <th scope="col">Closing Quantity</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>


            @php($i = 1)

            @foreach ($products as $row)
            <tr>
                <th>{{ $i++ }}</th>
                <td>{{ $row->product_code }}</td>
                <td>{{ $row->product_description }}</td>
                <td>{{ $row->opening_qty }}</td>
                <td>{{ $row->purchase_qty }}</td>
                <td>{{ $row->sales_qty }}</td>
                <td>{{ $row->closing_qty }}</td>
                <td>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

    </div>
</div>
@endsection
