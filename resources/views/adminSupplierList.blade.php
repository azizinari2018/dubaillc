@extends('adminHeader')

@section('content')

<style type="text/css">
.hidden
{
  display: none;
}
</style>
		    <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Suppliers</span>
              <p class="title-bar-description">
              <small>All Suppliers</small>
            </p>
            </h1>
          </div>

          <div class="col-xs-12 col-sm-10 col-lg-10">
            @if (session('message'))
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>
                      {{ session('message') }}
                    </strong> 
                </div><!--alert-->
            @endif
           </div>
           <div class="col-xs-8 col-sm-2 col-lg-2">
           <a href="{{ url('adminAddSupplier') }}">
           <button class="btn btn-primary" type="button">Add New Supplier</button>
           </a>
           </div>
          <div class="row">
          <br>
          <br>
          <br>
          </div>
            <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">All Suppliers</div>
                <div class="panel-body panel-collapse">
                  <table id="demo-datatables-responsive-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                      	<th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $supplier)
                      <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>{{ $supplier->phone }} </td>
                        <td>
	                        <a href="{{ url('adminEditSupplier/'.$supplier->id) }}">Edit</a> | 
	                        <a href="{{ url('adminDeleteSupplier/'.$supplier->id) }}">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            @stop