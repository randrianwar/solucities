<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i>Report List</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashboard.php?page=home">Home</a></li>
      <li><i class="icon_document_alt"></i>Report list</li>
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
                               <th><i class="icon_group"></i> Informer</th>
                               <th><i class="icon_paperclip"></i> Subject</th>
                               <th><i class="icon_paperclip"></i> Email</th>
                               <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                        <?php
                        $sql = "SELECT * FROM contact";
                        $result = $conn->query($sql);
                        $i=1;
                        while ($row = $result->fetch_object()) {
                        echo "
                            <tr>
                              <td width='20px' align='center'>".$i++."</td>
                              <td>".$row->name."</td>
                              <td>".$row->subject."</td>
                              <td>".$row->email."</td>
                              <td>
                               <div class='btn-group'>
                              <a class='btn btn-success' href='./dashboard.php?page=vr&id=".$row->id."'><i class='icon_check_alt2'></i></a>
                              <a class='btn btn-danger' href='./dashboard.php?page=pl&act=del&id=".$row->id."' class='trash'><i class='icon_close_alt2'></i></a>
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
  <?php
  	if (isset($_GET['act'])) {
  		if ($_GET['act'] == 'del') {
  			$id = $_GET['id'];
  			$sql = "DELETE FROM post WHERE id=$id";
  			$result = $conn->query($sql);
  			header("Location:./dashboard.php?page=report");
  		}
  	}
  ?>
