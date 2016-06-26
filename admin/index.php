<?php
	ob_start();
	session_start();
	if (isset($_SESSION['login'])) {
		header("Location:dashboard.php");
	}

	include("../proc/connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img2-body">

    <div class="container">

      <form class="login-form" method='POST'>
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name='user' class="form-control" placeholder="Username" autofocus="">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name='pass' class="form-control" placeholder="Password" value="">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button name="login" class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
      </form>
      <?php include('../proc/process2.php');
			?>
    </div>

    <script>
      !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
          $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
      }(window.jQuery);

      $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
      })
      $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
      })
    </script>
  </body>

</html>
