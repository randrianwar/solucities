<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Create Info</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashbord.php">Home</a></li>
      <li><i class="icon_document_alt"></i>Info</li>
      <li><i class="fa fa-files-o"></i>Create Info</li>
    </ol>
  </div>
</div>

            <!-- CKEditor -->
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Form Create Info
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" method="post" id='feedback_form' enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title" class="control-label col-lg-1">Title <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" name="title" type="text" placeholder="Input Tittle Here" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-lg-1" for="content">Content</label>
                                  <div class="col-lg-10">
                                    <textarea class="form-control" id="content"></textarea>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="control-label col-lg-1">Picture</label>
                                    <div class="col-lg-10">
                                        <input name="picture" type="file">
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
                              $author = $_POST['author'];
                  						$title = $_POST['title'];
                              $content = $_POST['content'];
                  						date_default_timezone_set("Asia/Hong_Kong");
                  						$date = date("Y-m-d H:i:s");
                  						include('../proc/connect_db.php');
                  						$sql = "INSERT INTO post VALUES(null,'$author','$title','$content','$date')";
                  						$result = $conn->query($sql);

                  						$sql = "SELECT * FROM info ORDER BY id DESC LIMIT 1";
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
