<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i>Coach List Form</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashboard.php?page=home">Home</a></li>
      <li><i class="icon_document_alt"></i>Coach</li>
      <li><i class="fa fa-files-o"></i>Coach List</li>
    </ol>
  </div>
</div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                  <div class="table-responsive">
                    <table class="table table-striped table-advance table-hover" >
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>NIP</th>
                           <th>Full Name</th>
                           <th><i class="icon_mail_alt"></i> E-mail</th>
                           <th><i class="icon_building"></i> University</th>
                           <th><i class="icon_mail_alt"></i> Specialization</th>
                           <th>Gender</th>
                           <th><i class="icon_mobile"></i> Telephone</th>
                           <th><i class="icon_group"></i> Username</th>
                           <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                    <?php
    							 	$sql = "SELECT * FROM users WHERE level='coach'";
    								$result = $conn->query($sql);
    								$i=1;
    								while ($row = $result->fetch_object()) {
                    echo "
                        <tr>
                          <td width='20px' align='center'>".$i++."</td>
                          <td>".$row->nip."</td>
                          <td>".$row->name."</td>
                          <td>".$row->email."</td>
                          <td>".$row->study."</td>
                          <td>".$row->specialization."</td>
                          <td>".$row->gender."</td>
                          <td>".$row->notlp."</td>
                          <td>".$row->user."</td>
                          <td>
                           <div class='btn-group'>
												  <a class='btn btn-primary' href='./dashboard.php?page=ec&id=".$row->id."'><i class='icon_plus_alt2'></i></a>
											    <a class='btn btn-danger' href='./dashboard.php?page=cl&act=del&id=".$row->id."' class='trash'><i class='icon_close_alt2'></i></a>
                          </div>
                          </td>
                        </tr>
                        ";
                      }

                     ?>
                      </tbody>
                </table>
              </div>
              </section>
          </div>
      </div>
      <!-- page end-->
      <?php
      	if (isset($_GET['act'])) {
      		if ($_GET['act'] == 'del') {
      			$id = $_GET['id'];
      			$sql = "DELETE FROM users WHERE id=$id";
      			$result = $conn->query($sql);
      			header("Location:./dashboard.php?page=cl");
      		}
      	}
      ?>
