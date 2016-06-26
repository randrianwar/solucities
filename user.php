<!DOCTYPE HTML>
<html class="no-js">

<!-- Mirrored from preview.imithemes.com/born-to-give/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:04:08 GMT -->
<head>
<!-- Basic user Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Solucities - Crowdfunding</title>
<meta name="description" content="">
<meta name="keywords" content="solucitie,crowdfounding,charity">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">
<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a class="<?php if (!isset($_GET['page'])) { echo 'active'; } ?>"><a href="user.php" class="default-logo"><img src="images/logo.png" alt="Logo"></a>
                    <a class="<?php if (!isset($_GET['page'])) { echo 'active'; } ?>"><a href="user.php" class="default-retina-logo"><img src="images/logo%402x.png" alt="Logo" width="199" height="30"></a>
                    <a class="<?php if (!isset($_GET['page'])) { echo 'active'; } ?>"><a href="user.php" class="sticky-logo"><img src="images/sticky-logo.png" alt="Logo"></a>
                    <a class="<?php if (!isset($_GET['page'])) { echo 'active'; } ?>"><a href="user.php" class="sticky-retina-logo"><img src="images/sticky-logo%402x.png" alt="Logo" width="199" height="30"></a>
                </div>
             	<a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li class="<?php if ($_GET['page']=='create') { echo 'active'; } ?>"><a href="user.php?page=create">Create</a></li>
                    <li><a href="">About</a>
                    	<ul>
                    		<li class="<?php if ($_GET['page']=='intro') { echo 'active'; } ?>"><a href="user.php?page=intro">Introduction</a></li>
                    		<liclass="<?php if ($_GET['page']=='team') { echo 'active'; } ?>"><a href="user.php?page=team">Team</a></li>
                    		<li class="<?php if ($_GET['page']=='contact') { echo 'active'; } ?>"><a href="user.php?page=contact">Contact</a></li>
                      </ul>
                    </li>
                    <li class="<?php if ($_GET['page']=='event') { echo 'active'; } ?>"><a href="user.php?page=event">Projects</a></li>
                    <li class="<?php if ($_GET['page']=='news') { echo 'active'; } ?>"><a href="user.php?page=news">News</a></li>
                    <li class="<?php if ($_GET['page']=='contact') { echo 'active'; } ?>"><a href="user.php?page=contact">Contact</a></li>
                    <li>
                      <a><span class="testimonial-avatar">
                          <img src="images/staff4.jpg" width="48px">
                         </span>Username</a>
                    	<ul>
                    		<li class="<?php if ($_GET['page']=='home') { echo 'active'; } ?>"><a href="user.php?user=home">Home</a></li>
                    		<li class="<?php if ($_GET['page']=='home') { echo 'active'; } ?>"><a href="user.php?user=home">Profile</a></li>
                    		<li><a href="">Project</a></li>
                    		<li><a href="">Setting</a></li>
                    		<li><a>Log Out</a></li>
                      </ul>
                    </li>
              	</ul>
            </div>
        </header>
    </div>

    <?php
    if (isset($_GET['page'])) {
           if ($_GET['page']=='home') {
            include('user/home.php');
          }

          else if ($_GET['page']=='intro') {
            include('user/intro.php');
          }

          else if ($_GET['page']=='create') {
            include('user/create.php');
          }

          else if ($_GET['page']=='team') {
          include('user/team.php');
          }

          else if ($_GET['page']=='event') {
            include('user/event.php');
          }

          else if ($_GET['page']=='em') {
            include('user/event_more.php');
          }

          else if ($_GET['page']=='news') {
            include('user/news.php');
          }

          else if ($_GET['page']=='nr') {
            include('user/news_read.php');
          }

          else if ($_GET['page']=='register') {
            include('user/register.php');
          }

          else if ($_GET['page']=='contact') {
            include('user/contact.php');
          }

          else if ($_GET['page']=='post') {
          include('user/post.php');
          }
        }
        else {
          include('user/home.php');
        }

      ?>



    <!-- Site Footer -->
    <div class="site-footer parallax parallax3" style="background-image:url(images/parallax3.jpg)">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget">
                        <p><img src="images/logo.png" alt=""></p>
                        <p>Solucities adalah situs bla bla na'jv'a qrqfnakfmal nanfoanlanlfna naflnlanalla mlam;fm;a lamfafna nlamfmidkian andmsmaodoka as,mfaofmehnfk am,snjriha </p>
                        <p>Solucities adalah situs bla bla na'jv'a qrqfnakfmal nanfoanlanlfna naflnlanalla mlam;fm;a lamfafna nlamfmidkian andmsmaodoka as,mfaofmehnfk am,snjriha </p>
                    </div>
                </div>
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget widget_links">
                        <ul>
                        	<li><a href="#">Become a volunteer</a></li>
                        	<li><a href="#">Our mission</a></li>
                        	<li><a href="#">Success stories</a></li>
                        	<li><a href="#">Meet our Team</a></li>
                          <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            	<div class="col-md-4 col-sm-4">
                	<div class="widget footer_widget">
                    	<h4 class="widgettitle">Connect with Us on</h4>
                      <ul class="social-icons-rounded social-icons-colored">
                          <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                          <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                          <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                          <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <div class="site-footer-bottom">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6 col-sm-6">
                	<div class="copyrights-col-left">
                    	<p>&copy; 2016 Solucities. All Rights Reserved</p>
                    </div>
                </div>
            	<div class="col-md-6 col-sm-6"></div>
                	<div class="copyrights-col-right">
                    	<ul class="footer-menu">
                        	<li><a href="privacy-policy.html">Privacy policy</a></li>
                        	<li><a href="payment-terms.html">Payment terms</a></li>
                        	<li><a href="refund-policy.html">Refund policy</a></li>
                        </ul>
                    </div>
           	</div>
      	</div>
  	</div>
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- Donate Form Modal -->
<div class="modal fade" id="DonateModal" tabindex="-1" role="dialog" data-backdrop="static">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<div class="row">
                    <div class="col-md-6 col-sm-6 donate-amount-option">
                        <h4>Choose an amount</h4>
                        <ul class="predefined-amount">
                            <li><label><input type="radio" name="donation-amount">$10</label></li>
                            <li><label><input type="radio" name="donation-amount">$20</label></li>
                            <li><label><input type="radio" name="donation-amount">$30</label></li>
                            <li><label><input type="radio" name="donation-amount">$50</label></li>
                            <li><label><input type="radio" name="donation-amount">$100</label></li>
                        </ul>
                    </div>
                    <span class="donation-choice-breaker">Or</span>
                    <div class="col-md-6 col-sm-6 donate-amount-option">
                        <h4>Enter your own</h4>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">$</span>
                            <input type="number" class="form-control">
                        </div>
                    </div>
               	</div>
      		</div>
      		<div class="modal-body">
       			<div class="row">
                	<div class="col-md-6 col-sm-6 donation-form-infocol">
                    	<h4>Address</h4>
                        <input type="text" class="form-control" placeholder="Address line 1">
                        <input type="text" class="form-control" placeholder="Address line 2">
       					<div class="row">
                			<div class="col-md-8 col-sm-8 col-xs-8">
                        		<input type="text" class="form-control" placeholder="State/City">
                            </div>
                			<div class="col-md-4 col-sm-4 col-xs-4">
                        		<input type="text" class="form-control" placeholder="Zipcode">
                            </div>
                    	</div>
       					<div class="row">
                			<div class="col-md-3 col-sm-3 col-xs-3">
                        		<label>Country</label>
                            </div>
                			<div class="col-md-9 col-sm-9 col-xs-9">
                                <select class="selectpicker">
                                    <option>United States</option>
                                    <option>Australia</option>
                                    <option>Netherlands</option>
                                </select>
                            </div>
                    	</div>
                    </div>
                	<div class="col-md-6 col-sm-6 donation-form-infocol">
                    	<h4>Personal info</h4>
       					<div class="row">
                			<div class="col-md-6 col-sm-6 col-xs-6">
                        		<input type="text" class="form-control" placeholder="First name">
                            </div>
                			<div class="col-md-6 col-sm-6 col-xs-6">
                        		<input type="text" class="form-control" placeholder="Last name">
                            </div>
                    	</div>
                        <input type="text" class="form-control" placeholder="Email address">
                        <input type="text" class="form-control" placeholder="Phone no.">
                        <label class="checkbox"><input type="checkbox"> Register me on this website</label>
                    </div>
                 </div>
      		</div>
      		<div class="modal-footer text-align-center">
        		<button type="button" class="btn btn-primary">Make your donation now</button>
                <div class="spacer-20"></div>
                <p class="small">Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi.</p>
      		</div>
    	</div>
  	</div>
</div>

<!-- Donate Form Modal -->
<div class="modal" id="login" tabindex="0" role="dialog" data-backdrop="static">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              	  <h3>Personal Login</h3>
                  <input type="text" class="form-control" placeholder="Email address">
                  <input type="text" class="form-control" placeholder="Password">
                  <label class="checkbox"><input type="checkbox"> Remember Me.</label>
        		<button type="button" class="btn btn-primary">Login</button>
          </div>
    	</div>
  	</div>
</div>


<script src="js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
<script src="vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- PrettyPhoto Plugin -->
<script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="js/circle-progress.js"></script> <!-- Circle Progress Bars -->
<script src="style-switcher/js/jquery_cookie.js"></script>
<script src="style-switcher/js/script.js"></script>
</body>

<!-- Mirrored from preview.imithemes.com/born-to-give/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:07:19 GMT -->
</html>
