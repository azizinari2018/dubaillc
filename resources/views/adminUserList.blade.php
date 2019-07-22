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
              <span class="d-ib">Customers</span>
              <p class="title-bar-description">
              <small>All Customers</small>
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
           
          <div class="row">
          <br>
          <br>
          <br>
          </div>
            <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">All Customers</div>
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
                    @foreach($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td> 
	                        <a href="{{ url('adminDeleteUser/'.$user->id) }}">Delete</a>
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