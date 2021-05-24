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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>Delete</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Delete</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Larry</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Delete</td>
              </tr>
            </tbody>
          </table>

    </div>
</div>
@endsection
