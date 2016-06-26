<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Post</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashbord.php">Home</a></li>
      <li><i class="icon_document_alt"></i>Post</li>
      <li><i class="fa fa-files-o"></i>Edit Post</li>
    </ol>
  </div>
</div>

<?php
	include('../proc/connect_db.php');
	$sql = "SELECT * FROM post WHERE id=".$_GET['id'];
	$result = $conn->query($sql);
	$row = $result->fetch_object();
?>


            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Form Edit Post
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" method="POST" id='feedback_form' enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title" class="control-label col-lg-1">Title <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input value='<?php echo $row->title; ?>' type='text' name='title' class='form-control'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="control-label col-lg-1">Picture</label>
                                    <div class="col-lg-10">
                                        <img src='img/post/<?php echo $row->id; ?>.jpg' width='300px' alt='belum ada gambar'>
                                        <input name="picture" type="file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-1">Category</label>
                                    <div class="col-sm-10">
                                      <input value='<?php echo $row->category; ?>' type='text' name='category' class='form-control'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-1">Post</label>
                                    <div class="col-sm-10">
                                        <textarea name='post' class='form-control ckeditor' rows="6" ><?php echo $row->post; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-1 cl-lg-10">
                                        <button name="input" class="btn btn-primary" type="submit" >Publish</button>
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                  					if (isset($_POST['input'])) {

                  						$title = $_POST['title'];
                              $post = $_POST['post'];
                  						$category = $_POST['category'];

                              if (!$_FILES['picture']['tmp_name'] == '') {
                              move_uploaded_file($_FILES['picture']['tmp_name'],'img/post/'.$row->id.'.jpg');
                              }

                              $sql = "UPDATE post SET title='$title', post='$post', category='$category' WHERE id=".$_GET['id'];
                              $result = $conn->query($sql);

                              if ($result) {
                                echo "<script>window.location.href='./dashboard.php?page=pl';</script>";

                          }
                      }
                      ?>
                        </div>
                    </div>
                </section>
            </div>
