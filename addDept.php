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
            <input type="text" class="form-control" id="docno" placeholder="Enter Department Name" name="deptName">
          </div>
          <button type="submit" name="submit" class="btn btn-default">Save</button>
        </form>
     </div>
    <!-- /.container -->
    
<?php include './includes/footer.php';?>