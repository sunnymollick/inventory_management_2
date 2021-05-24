@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="text-center text-dark">All Suppliers
            <a href="{{ route('add.supplier') }}" class="btn btn-info" style="float: right">Add Supplier</a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="dataTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Opening Balance</th>
                <th scope="col">Purchase</th>
                <th scope="col">Payment</th>
                <th scope="col">Closing Balance</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($suppliers as $row)
                <tr>
                    <th>{{ $i++ }}</th>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->opening_bal }}</td>
                    <td>{{ $row->purchase }}</td>
                    <td>{{ $row->payment }}</td>
                    <td>{{ $row->closing_bal }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                        <a href="" class="btn btn-sm btn-info">Edit</a>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>

    </div>
</div>
@endsection
