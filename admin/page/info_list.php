<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i>Info List</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashboard.php?page=home">Home</a></li>
      <li><i class="icon_document_alt"></i>Info</li>
      <li><i class="fa fa-files-o"></i>Info List</li>
    </ol>
  </div>
</div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                      <div class="table-responsive">
                        <table class="table table-striped table-advance table-hover">
                         <thead>
                            <tr>
                               <th> No.</th>
                               <th><i class="icon_group"></i> Author</th>
                               <th>Title</th>
                               <th><i class="icon_clock_alt"></i> Time</th>
                               <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                        <?php
                        $sql = "SELECT * FROM info";
                        $result = $conn->query($sql);
                        $i=1;
                        while ($row = $result->fetch_object()) {
                        echo "
                            <tr>
                              <td width='20px' align='center'>".$i++."</td>
                              <td>".$row->author."</td>
                              <td>".$row->title."</td>
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
