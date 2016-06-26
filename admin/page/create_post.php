<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Create Post</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashbord.php">Home</a></li>
      <li><i class="icon_document_alt"></i>Post</li>
      <li><i class="fa fa-files-o"></i>Create Post</li>
    </ol>
  </div>
</div>

            <!-- CKEditor -->
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Form Create Post
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" method="POST" id='feedback_form' enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title" class="control-label col-lg-1">Title <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title" type="text" placeholder="Input Tittle Here" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="control-label col-lg-1">Picture</label>
                                    <div class="col-lg-10">
                                        <input name="picture" type="file">
                                    </div>
                                </div>
                                <!-- Cateogry -->
                                <div class="form-group">
                                  <label class="control-label col-lg-1">Category</label>
                                  <div class="col-lg-10">
                                      <select name="category" class="form-control">
                                        <option value="">- Choose Category -</option>
                                        <option value="General">General</option>
                                        <option value="News">News</option>
                                        <option value="Media">Media</option>
                                        <option value="Funny">Funny</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-1">Post</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control ckeditor" name="post" rows="6"></textarea>
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
                              $author = $row->name;
                  						$title = $_POST['title'];
                              $post = $_POST['post'];
                  						$category = $_POST['category'];
                  						date_default_timezone_set("Asia/Hong_Kong");
                  						$date = date("Y-m-d H:i:s");
                  						include('../proc/connect_db.php');
                  						$sql = "INSERT INTO post VALUES(null,'$author','$title','$post','$category','$date')";
                  						$result = $conn->query($sql);

                  						$sql = "SELECT * FROM post ORDER BY id DESC LIMIT 1";
                  						$result = $conn->query($sql);
                  						$row = $result->fetch_object();

                  						move_uploaded_file($_FILES['picture']['tmp_name'],'img/post/'.$row->id.'.jpg');

                  					  if ($result) {
                                echo "<script>window.location.href='./dashboard.php?page=pl';</script>";

                              }
                  					}
                  					?>
                        </div>
                    </div>
                </section>
            </div>
