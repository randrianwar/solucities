<?php
	ob_start();
	session_start();
	//shop not login  users from entering
	if(isset($_SESSION['id'])){
		$user_id = $_SESSION['id'];
	}
	else {
		header("Location:./");
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

    <title>Portal Admin</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
		<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
		<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	    <!-- Custom styles -->
		<link rel="stylesheet" href="css/fullcalendar.css">
		<link href="css/widgets.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
	  <link href="css/style-responsive.css" rel="stylesheet" />
		<link href="css/xcharts.min.css" rel=" stylesheet">
		<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">


      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <!--logo start-->
            <a href="dashboard.php?page=home" class="logo"><span class="lite">Welcome Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">


                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
													<i class="icon-envelope-l"></i>
													<span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
										<!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/admin2.png" width="32px">
                            </span>
														<span class="username"><?php
                              include('../proc/connect_db.php');
                              $sql = "SELECT * FROM users WHERE id =".$_SESSION['id'];
                              $result = $conn->query($sql);
                              $row = $result->fetch_object();
                              echo $row->name;
                              ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="dashboard.php?page=home">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_id-2"></i>
                          <span>Coachs</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php if ($_GET['page']=='cl') { echo "active"; } ?>"><a href="dashboard.php?page=cl">Coachs list</a></li>
                          <li class="<?php if ($_GET['page']=='ac') { echo "active"; } ?>"><a href="dashboard.php?page=ac">Add Coach</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_id-2_alt"></i>
                          <span>Users</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                        <li class="<?php if ($_GET['page']=='ul') { echo "active"; } ?>"><a href="dashboard.php?page=ul">Users list</a></li>
                        <li class="<?php if ($_GET['page']=='au') { echo "active"; } ?>"><a href="dashboard.php?page=au">Add User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Post</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
													<li class="<?php if ($_GET['page']=='pl') { echo "active"; } ?>"><a href="dashboard.php?page=pl">Post List</a></li>
													<li class="<?php if ($_GET['page']=='cp') { echo "active"; } ?>"><a href="dashboard.php?page=cp">Create Post</a></li>
                      </ul>
                  </li>
									<li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_menu-circle_alt2"></i>
                          <span>Timeline Info</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
													<li class="<?php if ($_GET['page']=='il') { echo "active"; } ?>"><a href="dashboard.php?page=il">Info List</a></li>
													<li class="<?php if ($_GET['page']=='ci') { echo "active"; } ?>"><a href="dashboard.php?page=ci">Create Info</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="<?php if ($_GET['page']=='ci') { echo "active"; } ?>" href="dashboard.php?page=ci">
                          <i class="icon_mail_alt"></i>
                          <span>Inbox</span>
													<span class="badge bg-important">7</span>
                      </a>
                  </li>
									<li>
                      <a class="<?php if ($_GET['page']=='report') { echo "active"; } ?>" href="dashboard.php?page=report">
                          <i class="icon_adjust-vert"></i>
                          <span>Report List</span>
													<span class="badge bg-important">7</span>
                      </a>
                  </li>
									<li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Open Coaching</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

  <!-- container section start -->
  <section id="main-content">
      <section class="wrapper">
          <!--overview start-->
  <?php
    if (isset($_GET['page'])) {
      if ($_GET['page']=='cl') {
        include('page/coachs_list.php');
      }

      elseif ($_GET['page']=='ac') {
        include('page/add_coach.php');
      }

      elseif ($_GET['page']=='ec') {
        include('page/edit_coach.php');
      }

      elseif ($_GET['page']=='ul') {
        include('page/users_list.php');
      }

      elseif ($_GET['page']=='au') {
        include('page/add_user.php');
      }

      elseif ($_GET['page']=='eu') {
        include('page/edit_user.php');
      }

      elseif ($_GET['page']=='cp') {
        include('page/create_post.php');
      }

			elseif ($_GET['page']=='pl') {
        include('page/post_list.php');
      }

			elseif ($_GET['page']=='ep') {
        include('page/edit_post.php');
      }

			elseif ($_GET['page']=='ci') {
        include('page/create_info.php');
      }

			elseif ($_GET['page']=='il') {
        include('page/info_list.php');
      }

			elseif ($_GET['page']=='ei') {
        include('page/edit_info.php');
      }

			elseif ($_GET['page']=='coaching') {
        include('page/coaching.php');
      }

			elseif ($_GET['page']=='chat') {
        include('page/chat.php');
      }

			elseif ($_GET['page']=='report') {
        include('page/report.php');
      }

			elseif ($_GET['page']=='vr') {
        include('page/view_report.php');
      }

			elseif ($_GET['page']=='home') {
        include('page/home.php');
      }

    }

    else {
      include('page/home.php');
    }
  ?>
      </section>
    </section>
</section>
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
		<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
	  <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
		<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
		<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
		<script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
		<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="js/jquery-jvectormap-world-mill-en.js"></script>
		<script src="js/xcharts.min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/gdp-data.js"></script>
		<script src="js/morris.min.js"></script>
		<script src="js/sparklines.js"></script>
		<script src="js/charts.js"></script>
		<script src="js/jquery.slimscroll.min.js"></script>
		<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!--<script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script src="js/form-validation-script.js"></script>-->

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
