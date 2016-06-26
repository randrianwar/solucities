<!-- Hero Area -->
<div class="hero-area">
  <div class="page-banner parallax" style="background-image:url(images/inside5.jpg);">
      <div class="container">
          <div class="page-banner-text">
          <h1 class="block-title">Hello Username!!</h1>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div id="main-container">
  <div class="content">
      <div class="container">
          <div class="row">
                <div class="col-md-2">
                  <div class="icon-box ibox-center ibox-border">
                      <div class="ibox-icon">
                          <i class="testimonial-avatar"><img src="images/staff4.jpg"></i>
                      </div>
                      <h3>Your Profil</h3>
                  </div>
                </div>
              <div class="col-md-10 content-block">
                <div class="col-md-4" class="<?php if ($_GET['page']=='create') { echo "active"; } ?>"><a href="user.php?page=create">
                <div class="info-box red-bg">
                  <i class="icon-paper-pen"></i>
                  <div class="count">New Project</div>
                  <div class="title">Create</div>
                </div><!--/.info-box--></a>
                </div>
                <div class="col-md-4" class="<?php if ($_GET['page']=='lc') { echo "active"; } ?>"><a href="user.php?page=lc">
                <div class="info-box blue-bg">
                  <i class="icon-folder"></i>
                  <div class="count">Created Project</div>
                  <div class="title">View</div>
                </div><!--/.info-box--></a>
                </div>
                <div class="col-md-4" class="<?php if ($_GET['page']=='lc') { echo "active"; } ?>"><a href="user.php?page=lc">
                <div class="info-box green-bg">
                  <i class="icon-heart"></i>
                  <div class="count">Backed Project</div>
                  <div class="title">Link</div>
                </div><!--/.info-box--></a>
                </div>
              </div>
              <div class="col-md-10 content-block">
                <h2>Activity <i class="icon-booknote"></i></h2>
                <div class="widget footer_widget widget_links">
                  <span class="testimonial-avatar">
                      <img src="images/cause5.jpg" width="48px">
                    1 day ago</span>
                <h5>You joined Solucities! Welcome Soluciver :)</h5>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
