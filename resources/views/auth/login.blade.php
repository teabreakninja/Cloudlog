<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cloudlog - Login</title>

    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/login.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo URL::to('/'); ?>/assets/js/bootstrap.min.js"></script>

  </head>

  <body>

    <div class="container">

      <form method="POST" action="/auth/login" class="form-signin">
        {!! csrf_field() !!}

        <h2 class="form-signin-heading">Login to Cloudlog</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail"  value="{{ old('email') }}" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
