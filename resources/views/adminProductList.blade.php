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
              <span class="d-ib">Products</span>
              <p class="title-bar-description">
              <small>All Products</small>
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
           <a href="{{ url('adminAddProduct') }}">
           <button class="btn btn-primary" type="button">Add New Product</button>
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
                <div class="panel-heading">All Products</div>
                <div class="panel-body panel-collapse">
                  <table id="demo-datatables-responsive-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                      	<th>Image</th>
                        <th>Name</th>
                        <th>Supplier Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                      <tr>
                        <td><img src="img/products/{{ $product->productImage }}" width="80px" alt=""></td>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->supplierName }}</td>
                        <td>{{ $product->productPrice }}</td>
                        <td>{{ $product->productInventory }} </td>
                        <td>
	                        <a href="{{ url('adminEditProduct/'.$product->id) }}">Edit</a> | 
	                        <a href="{{ url('adminDeleteProduct/'.$product->id) }}">Delete</a>
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