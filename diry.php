<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<?php include './includes/functions.php';?>
<?php
if(isset($_POST['addDept'])) 
{ 
    $deptName = $_POST['deptName'];

 $sql = "INSERT INTO `dept_dir`(`list`)".
        "VALUES('$deptName')";
            mysqli_select_db($conn, $dbname);
            $retval = mysqli_query($conn, $sql);
            
            if(! $retval) {
               die('Could not enter data: ' . mysqli_error());
            }
            
            echo "Entered data successfully";
            
            mysqli_close($conn);
}
?>
<!-- Page Content -->
    <div class="container">
       <h2>File send</h2>
       <form id="submit_form">
          <div class="form-group">
            <label for="docno">Document Number:</label>
            <input type="text" name="docno" id="docno" class="form-control" />
          </div>
          <div class="form-group">
            <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="date" name="date">
          </div>
          <div class="form-group">
            <label for="title">Subject:</label>
            <input type="text" name="title" id="title" class="form-control" />
          </div>
          <div class="form-group">
            <label for="send">Send to:</label>
            <select class="form-control" name="send" id="send">
                <?php echo getDepList($conn);?>
            </select>
          </div>
          <input type="button" name="diry" id="diry" class="btn btn-default" value="Submit" />
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addNewDept">Add New Department</button>
        </form>
       <div id="response"></div>
       <!-- Modal -->
        <div class="modal fade" id="addNewDept" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Department</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <div class="form-group">
                    <label for="deptName">Department Name</label>
                    <input type="text" class="form-control" id="deptName" placeholder="Enter Department Name" name="deptName">
                  </div>
                  <button type="submit" name="addDept" class="btn btn-default">Save</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
       
     </div>
    <!-- /.container -->
<?php include './includes/footer.php';?>
    <script src="js/insertDiry.js"></script>