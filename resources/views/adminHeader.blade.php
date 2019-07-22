<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#d9230f">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <!----><link rel="stylesheet" href="{{ asset('css/admin/css/vendor.minf9e3.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/css/elephant.minf9e3.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/css/application.minf9e3.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/css/demo.minf9e3.css?v=1.1') }}">
    <!-- <link rel="stylesheet" href="css/admin/css/profile.minf9e3.css?v=1.1"> -->

    <script src="{{ asset('js/admin/js/jquery-1.8.0.min.js') }}"></script>
    <script src="{{ asset('js/admin/js/select2.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#states").select2();   
        });
    </script>
  </head>

  <!-- topPannel -->
   <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="">
            <h3 style="margin-top: 0px;
    color: white;">Admin</h3>
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="img/admin-img/0180441436.jpg" alt="Teddy Wilson">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
            </ul>
          </nav>
        </div>
      </div>
    </div>
  <!-- topPannel End-->

  <!-- sidebar -->
  <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                <li class="sidenav-item @if($page == 'dashboard') active @endif">
                  <a href="{{ url('adminDashboard') }}" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">Dashboard</span>
                  </a>
                </li>
                <li class="sidenav-item @if($page == 'products') active @endif">
                  <a href="{{ url('adminProducts') }}">
                    <span class="sidenav-icon icon icon-automobile"></span>
                    <span class="sidenav-label">Manage Products</span>
                  </a>
                </li>
                <li class="sidenav-item @if($page == 'users') active @endif">
                  <a href="{{ url('adminUsers') }}">
                    <span class="sidenav-icon icon icon-users"></span>
                    <span class="sidenav-label">Manage Customers</span>
                  </a>
                </li>
                <li class="sidenav-item @if($page == 'suppliers') active @endif">
                  <a href="{{ url('adminSuppliers') }}">
                    <span class="sidenav-icon icon icon-user"></span>
                    <span class="sidenav-label">Manage Supplier</span>
                  </a>
                </li>
                
                <li class="sidenav-item @if($page == 'orders') active @endif">
                  <a href="{{ url('adminOrders') }}">
                    <span class="sidenav-icon icon icon-desktop"></span>
                    <span class="sidenav-label">Manage Orders</span>
                  </a>
                </li>
                 <li class="sidenav-item">
                  <a href="{{ url('adminLogout') }}">
                    <span class="sidenav-icon icon icon-sign-out"></span>
                    <span class="sidenav-label">Logout</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="layout-content">
        <div class="layout-content-body">
  <!-- sidebar End -->


    @yield('content')


     </div>
      </div>
      <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.1</small>
          <small class="copyright">2019 &copy; Abdul Aziz </small>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/admin/js/vendor.minf9e3.js?v=1.1') }}"></script>
    <script src="{{ asset('js/admin/js/elephant.minf9e3.js?v=1.1') }}"></script>
    <script src="{{ asset('js/admin/js/application.minf9e3.js?v=1.1') }}"></script>
    <script src="{{ asset('js/admin/js/demo.minf9e3.js?v=1.1') }}"></script>
    <script src="{{ asset('js/admin/js/profile.minf9e3.js?v=1.1') }}"></script>
   </body>
</html>