<html>
  <head>
    <title>App Name - @yield('title')</title>

    <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/global.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/assets/css/bootstrap-theme.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo URL::to('/'); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo URL::to('/'); ?>/assets/js/bootstrap.min.js"></script>
  </head>

  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cloudlog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo URL::to('/qso'); ?>">QSO</a></li>
            <li><a href="#logbook">Logbook</a></li>
            <li><a href="#search">Search</a></li>
            <li><a href="#Statistics">Statistics</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="profile-img" src="<?php echo Gravatar::src(Auth::user()->email, 28) ?>" alt="" /> <?php echo Auth::user()->name;?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></a></li>
                <li><a href="#"><i class="fa fa-database"></i> Logbooks</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo URL::to('/auth/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
  </body>
</html>
