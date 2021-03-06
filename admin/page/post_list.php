<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i>Post List</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashboard.php?page=home">Home</a></li>
      <li><i class="icon_document_alt"></i>Post</li>
      <li><i class="fa fa-files-o"></i>Pos List</li>
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
                               <th><i class="icon_group"></i> Author</th>
                               <th><i class="icon_paperclip"></i>Title</th>
                               <th><i class="icon_paperclip"></i> category</th>
                               <th><i class="icon_clock_alt"></i> Time</th>
                               <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                        <?php
                        $sql = "SELECT * FROM post";
                        $result = $conn->query($sql);
                        $i=1;
                        while ($row = $result->fetch_object()) {
                        echo "
                            <tr>
                              <td width='20px' align='center'>".$i++."</td>
                              <td>".$row->author."</td>
                              <td>".$row->title."</td>
                              <td>".$row->category."</td>
                              <td>".$row->time."</td>
                              <td>
                               <div class='btn-group'>
                              <a class='btn btn-primary' href='./dashboard.php?page=ep&id=".$row->id."'><i class='icon_plus_alt2'></i></a>
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
  			header("Location:./dashboard.php?page=pl");
  		}
  	}
  ?>
