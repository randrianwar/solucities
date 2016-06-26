<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> View Report</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="dashbord.php">Home</a></li>
      <li><i class="icon_document_alt"></i>Report</li>
      <li><i class="fa fa-files-o"></i>View Report</li>
    </ol>
  </div>
</div>

<?php
	include('../proc/connect_db.php');
	$sql = "SELECT * FROM contact WHERE id=".$_GET['id'];
	$result = $conn->query($sql);
	$row = $result->fetch_object();
?>


            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        View Report
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" method="POST" id='feedback_form' enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title" class="control-label col-lg-1">Informer</label>
                                    <div class="col-lg-10">
                                        <input value='<?php echo $row->name; ?>' type='text' name='title' class='form-control'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-1">Subject</label>
                                    <div class="col-sm-10">
                                      <input value='<?php echo $row->subject; ?>' type='text' name='category' class='form-control'/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-1">E-Mail</label>
                                    <div class="col-lg-10">
                                        <input value='<?php echo $row->email; ?>' class="form-control " type="email" name="email"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-1">Message</label>
                                    <div class="col-lg-10">
                                        <textarea rows="4" class="form-control" name="message"><?php echo $row->message; ?></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
