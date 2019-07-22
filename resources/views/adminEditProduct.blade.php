@extends('adminHeader')

@section('content')

	<div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Edit Product</span>
              <p class="title-bar-description">
              <small> Update Product </small>
            </p>
            </h1>
          </div>
		<div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="demo-md-form-wrapper">
              <form method='post' action="{{ url('updateProduct') }}" enctype='multipart/form-data'>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              	<div class="md-form-group md-label-floating">
              		<input type="hidden" name="id" value="{{$product['id']}}">
                  <input class="md-form-control" type="text" required name="productName" value="{{$product['productName']}}" >
                  <label class="md-control-label">Product Name</label>
                </div>
                <div class="md-form-group">
                  <select class="md-form-control" required name="supplierId">
                  <option value="">Select Supplier</option>
					@foreach($suppliers as $supplier)
						<option value="{{ $supplier->id }}" @if($product['supplierId'] == $supplier->id) selected @endif>{{ $supplier->name }}</option>';
					@endforeach
                  </select>
                </div>
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" required name="productPrice" value="{{$product['productPrice']}}" >
                  <label class="md-control-label">Price</label>
                </div>
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" required name="productInventory" value="{{$product['productInventory']}}" >
                  <label class="md-control-label">Inventory</label>
                </div>
                <div class="md-form-group md-form-group-lg">
                  <label class="control-label" for="image">Product Image</label>
                  <div class="controls"><input type="file"  name="productImage"><img src="{{asset('img/products/'.$product['productImage'])}}" width="50px" style="float: right;    margin-top: -40px;" alt="">
                    </div>
                  </div>

                 <div class="panel panel-body text-center" data-toggle="match-height">
                <button class="btn btn-primary" type="submit">Update Product</button>
              </div>
              </form>
              </div>
             </div>
          </div>
          </form>
@stop