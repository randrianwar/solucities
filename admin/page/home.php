<div class="row">
<div class="col-lg-12">
  <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="#">Home</a></li>
    <li><i class="fa fa-laptop"></i>Dashboard</li>
  </ol>
</div>
</div>

        <div class="col-lg-12">
          <div class="col-lg-5">
            <div  class="<?php if ($_GET['page']=='lc') { echo "active"; } ?>"><a href="user.php?page=lc">
            <div class="info-box blue-bg">
              <i class="icon_desktop"></i>
              <div class="count">Live Coaching</div>
              <div class="title">Link</div>
            </div><!--/.info-box--></a>
            </div>



              <div  class="<?php if ($_GET['page']=='lc') { echo "active"; } ?>"><a href="user.php?page=lc">
            <div class="info-box brown-bg">
              <i class="icon_chat_alt"></i>
              <div class="count">Chat</div>
              <div class="title">Link</div>
            </div><!--/.info-box-->
          </div><!--/.col-->
        </div>

          <div class="col-md-7 portlets">
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <div class="pull-left">Quick Post</div>
                   <div class="widget-icons pull-right">
                     <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                     <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                   </div>
                   <div class="clearfix"></div>
                 </div>
                 <div class="panel-body">
                   <div class="padd">

                       <div class="form quick-post">
                                       <!-- Edit profile form (not working)-->
                                       <form class="form-horizontal">
                                           <!-- Title -->
                                           <div class="form-group">
                                             <label class="control-label col-lg-2" for="title">Title</label>
                                             <div class="col-lg-10">
                                               <input type="text" class="form-control" id="title">
                                             </div>
                                           </div>
                                           <!-- Content -->
                                           <div class="form-group">
                                             <label class="control-label col-lg-2" for="content">Content</label>
                                             <div class="col-lg-10">
                                               <textarea class="form-control" id="content"></textarea>
                                             </div>
                                           </div>
                                           <!-- Cateogry -->
                                           <div class="form-group">
                                             <label class="control-label col-lg-2">Category</label>
                                             <div class="col-lg-10">
                                                 <select class="form-control">
                                                   <option value="">- Choose Cateogry -</option>
                                                   <option value="1">General</option>
                                                   <option value="2">News</option>
                                                   <option value="3">Media</option>
                                                   <option value="4">Funny</option>
                                                 </select>
                                             </div>
                                           </div>
                                           <!-- Tags -->
                                           <div class="form-group">
                                             <label class="control-label col-lg-2" for="tags">Tags</label>
                                             <div class="col-lg-10">
                                               <input type="text" class="form-control" id="tags">
                                             </div>
                                           </div>

                                           <!-- Buttons -->
                                           <div class="form-group">
                                              <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                         <button type="submit" class="btn btn-primary">Publish</button>
                         <button type="submit" class="btn btn-danger">Save Draft</button>
                         <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                                           </div>
                                       </form>
                                     </div>


                   </div>
                   <div class="widget-foot">
                     <!-- Footer goes here -->
                   </div>
                 </div>
               </div>

             </div>
