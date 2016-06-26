<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i>Form Tambah Coach</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashbord.php">Home</a></li>
      <li><i class="icon_document_alt"></i>Coach</li>
      <li><i class="fa fa-files-o"></i>Add Coach</li>
    </ol>
  </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Form validations coach
            </header>
            <div class="panel-body">
              <form class="form-validate form-horizontal" method="post" id='feedback_form' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="cnip" class="control-label col-lg-2">NIP <span class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class=" form-control" name="nip" type="text" required/>
                    </div>
                </div>
                <div class="form-group">
                  <label for="cname" class="control-label col-lg-2">Full Name<span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="name" type="text" required/>
                  </div>
                </div>
                <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-mail <span class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control" name="email" type="email" required/>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="study" class="control-label col-lg-2">University</label>
                    <div class="col-lg-10">
                        <input class=" form-control" name="study" type="text" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="cspecialization" class="control-label col-lg-2">Specialization<span class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control" name="specialization" type="text" required/>
                    </div>
                </div>
                  <div class="form-group ">
                      <label for="gender" class="control-label col-lg-2">Gender: </label>
                      <div class="col-lg-10">
                          <label class="radio-inline">
                              <input type="radio" name="gender" value="Female" > Female
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="gender"  value="Male" checked> Male
                          </label>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="notlp" class="control-label col-lg-2">Telepone</label>
                      <div class="col-lg-10">
                          <input class="form-control " name="notlp" type="text" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Level: </label>
                      <div class="col-lg-10">
                          <p class="form-control-static">Coach</p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="cuser" class="control-label col-lg-2">Username <span class="required">*</span></label>
                      <div class="col-lg-10">
                          <input class="form-control" name="user" type="text" required/>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="cpass" class="control-label col-lg-2">Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                          <input class="form-control" name="pass" type="password" required/>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="foto" class="control-label col-lg-2">Foto</label>
                      <div class="col-lg-10">
                          <input name="foto" type="file" class='form-control'/>
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
                  $level = 'coach';
                  $user = $_POST['user'];
                  $pass = $_POST['pass'];
                  $pass = md5($pass);

                  $sql = "INSERT INTO users VALUES(null,'$nip','$name','$email','$study','$specialization','$gender','$notlp','$level','$user','$pass','')";
                  $result = $conn->query($sql);

                  $sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
                  $result = $conn->query($sql);
                  $row = $result->fetch_object();

                  move_uploaded_file($_FILES['foto']['tmp_name'],'img/users/'.$row->id.'.jpg');

                  if ($result) {
                    echo "<script>window.location.href='./dashboard.php?page=cl';</script>";
                    echo var_dump();
                  }
              }
              ?>
                </div>
            </div>
        </section>
    </div>
</div>
