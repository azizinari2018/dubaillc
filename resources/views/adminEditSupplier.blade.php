@extends('adminHeader')

@section('content')

	<div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Edit Supplier</span>
              <p class="title-bar-description">
              <small> Update Supplier </small>
            </p>
            </h1>
          </div>
		<div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="demo-md-form-wrapper">
              <form method='post' action="{{ url('updateSupplier') }}" enctype='multipart/form-data'>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              	<div class="md-form-group md-label-floating">
              		<input type="hidden" name="id" value="{{$supplier['id']}}">
                  <input class="md-form-control" type="text" required name="name" value="{{$supplier['name']}}" >
                  <label class="md-control-label">Name</label>
                </div>
               
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="email" required name="email" value="{{$supplier['email']}}" >
                  <label class="md-control-label">Email</label>
                </div>
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="password" required name="password" value="{{$supplier['password']}}" >
                  <label class="md-control-label">Password</label>
                </div>

                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" required name="phone" value="{{$supplier['phone']}}" >
                  <label class="md-control-label">Phone</label>
                </div>
                

                 <div class="panel panel-body text-center" data-toggle="match-height">
                <button class="btn btn-primary" type="submit">Update Supplier</button>
              </div>
              </form>
              </div>
             </div>
          </div>
          </form>
@stop