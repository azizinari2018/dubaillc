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
              <span class="d-ib">Orders</span>
              <p class="title-bar-description">
              <small>All Orders</small>
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
                <div class="panel-heading">All Orders</div>
                <div class="panel-body panel-collapse">
                  <table id="demo-datatables-responsive-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                      	<th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                      <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>${{ $order->total_price }}</td>
                        <td> 
	                        <a href="{{ url('adminDeleteOrder/'.$order->id) }}">Delete</a>
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