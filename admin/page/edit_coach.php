<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Coach Form</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashbord.php">Home</a></li>
      <li><i class="icon_document_alt"></i>Coach</li>
      <li><i class="fa fa-files-o"></i>Edit Coach</li>
    </ol>
  </div>
</div>

<?php
  include('../proc/connect_db.php');
	$sql = "SELECT * FROM users WHERE id=".$_GET['id'];
	$result = $conn->query($sql);
	$row = $result->fetch_object();
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Edit User Form
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" method="post" id='feedback_form' enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="cnim" class="control-label col-lg-2">NIP <span class="required">*</span></label>
                          <div class="col-lg-10">
                              <input value='<?php echo $row->nip; ?>' class=" form-control" name="nip" type="text" required/>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Full Name<span class="required">*</span></label>
                        <div class="col-lg-10">
                          <input value='<?php echo $row->name; ?>' class="form-control" name="name" type="text"/>
                        </div>
                      </div>
                      <div class="form-group ">
                          <label for="cmail" class="control-label col-lg-2">E-mail <span class="required">*</span></label>
                          <div class="col-lg-10">
                              <input value='<?php echo $row->email; ?>' class="form-control" name="email" type="email"/>
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="study" class="control-label col-lg-2">University</label>
                          <div class="col-lg-10">
                              <input value='<?php echo $row->study; ?>' class=" form-control" name="study" type="text" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="cspeisalis" class="control-label col-lg-2">Specialization <span class="required">*</span></label>
                          <div class="col-lg-10">
                              <input value='<?php echo $row->specialization; ?>' class="form-control" name="specialization" type="text"/>
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="gender" class="control-label col-lg-2">Gender</label>
                          <div class="col-lg-10">
                              <input value='<?php echo $row->gender; ?>' class=" form-control" name="gender" type="text" />
                          </div>
                        </div>
                        <div class="form-group ">
                            <label for="notlp" class="control-label col-lg-2">Telepone</label>
                            <div class="col-lg-10">
                                <input value='<?php echo $row->notlp; ?>' class="form-control " name="notlp" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cuser" class="control-label col-lg-2">Username</label>
                            <div class="col-lg-10">
                                <input value='<?php echo $row->user; ?>' class="form-control" name="user" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cpass" class="control-label col-lg-2">Password </label>
                            <div class="col-lg-10">
                                <input value='<?php echo $row->pass; ?>' class="form-control" name="pass" type="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="control-label col-lg-2">Foto</label>
                            <div class="col-lg-10">
                                <img src="img/users/<?php echo $row->id; ?>.jpg" alt="belum ada gambar" onError="this.onerror=null;this.src='img/admin2.jpg';" width="80px">
                                <input name="foto" type="file"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button name="input" class="btn btn-primary" type="submit" >Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <?php
                      if (isset($_POST['input'])) {
                        $nip = $_POST['nip'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $study = $_POST['study'];
                        $specialization = $_POST['specialization'];
                        $gender = $_POST['gender'];
                        $notlp = $_POST['notlp'];
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $pass = md5($pass);

                            if (!$_FILES['foto']['tmp_name'] == '') {
            			          move_uploaded_file($_FILES['foto']['tmp_name'],'img/users/'.$row->id.'.jpg');
            		            }

                            $sql = "UPDATE users SET nip='$nip', name='$name',email='$email',study='$study', specialization='$specialization',  gender='$gender', notlp='$notlp', user='$user', pass='$pass' WHERE id=".$_GET['id'];
						                $result = $conn->query($sql);

                            if ($result) {
                              echo "<script>window.location.href='./dashboard.php?page=cl';</script>";

                        }
                    }
                    ?>


                  </div>
              </div>
          </section>
      </div>
  </div>
