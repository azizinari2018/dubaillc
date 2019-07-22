@extends('adminHeader')

@section('content')

	<div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Add New Product</span>
              <p class="title-bar-description">
              <small> Add Product </small>
            </p>
            </h1>
          </div>

		<div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="demo-md-form-wrapper">
              <form method='post' action="{{ url('submitNewProduct') }}" enctype='multipart/form-data'>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              	<div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" required name="productName" value="" >
                  <label class="md-control-label">Product Name</label>
                </div>
                <div class="md-form-group">
                  <select class="md-form-control" required name="supplierId">
                  <option value="">Select Supplier</option>
					@foreach($suppliers as $supplier)
						<option value="{{ $supplier->id }}" >{{ $supplier->name }}</option>';
					@endforeach
                  </select>
                </div>
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" required name="productPrice" value="" >
                  <label class="md-control-label">Price</label>
                </div>
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" required name="productInventory" value="" >
                  <label class="md-control-label">Inventory</label>
                </div>
                <div class="md-form-group md-form-group-lg">
                  <label class="control-label" for="image">Product Image</label>
                  <div class="controls"><input type="file" required name="productImage">
                    </div>
                  </div>

                 <div class="panel panel-body text-center" data-toggle="match-height">
                <button class="btn btn-primary" type="submit">Add Product</button>
              </div>
              </form>
              </div>
             </div>
          </div>
          </form>
@stop