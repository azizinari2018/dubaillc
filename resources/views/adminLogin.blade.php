<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/admin/css/vendor.min.css">
    <link rel="stylesheet" href="css/admin/css/elephant.min.css">
    <link rel="stylesheet" href="css/admin/css/login-2.min.css">
    <link rel="stylesheet" href="css/admin/css/mystyle.css">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
          <h2> Admin Login </h2>

          <h5 class="blink_me" style="color:red;text-align:center;">{{ $error }}</h5>
        <div class="login-form" >
          <form data-toggle="validator" method="post" action="{{ url('adminLoginSubmit') }}">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <div class="form-group">
              <label for="username">Username</label>
              <input id="username" class="form-control" type="text" name="username" spellcheck="false" autocomplete="off" data-msg-minlength="Username must be 3 characters or more." data-msg-required="Please enter your Username ." required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="password" minlength="5" data-msg-minlength="Password must be 5 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked="checked">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">Keep me signed in</span>
              </label>
              <span aria-hidden="true"> · </span>
             <!-- <a href="">Forgot password?</a> -->
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
      </div>
      <div class="login-footer">
       <!-- Don't have an account? <a href="">Sign Up</a>-->
      </div>
    </div>
    <script src="js/admin/js/vendor.min.js"></script>
    <script src="js/admin/js/elephant.min.js"></script>
  </body>
</html>