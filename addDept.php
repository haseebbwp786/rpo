<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<?php
if(isset($_POST['submit'])) 
{ 
    $deptName = $_POST['deptName'];

 $sql = "INSERT INTO `dept_dir`(`list`)".
        "VALUES('$deptName')";
            mysqli_select_db($conn, $dbname);
            $retval = mysqli_query($conn, $sql);
            
            if(! $retval) {
               die('Could not enter data: ' . mysqli_error());
            }
            
            echo "Entered data successfully\n";
            
            mysqli_close($conn);
}
?>
<!-- Page Content -->
    <div class="container">
       <h2>Add New Department</h2>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
            <label for="deptName">Department Name</label>
            <input type="text" class="form-control" id="deptName" placeholder="Enter Department Name" name="deptName">
          </div>
          <button type="submit" name="submit" class="btn btn-default">Save</button>
        </form>
     </div>
    <!-- /.container -->
    
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
            <button type="submit" name="submit" class="btn btn-default">Save</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    
<?php include './includes/footer.php';?>