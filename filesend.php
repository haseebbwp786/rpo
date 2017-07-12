<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<?php include './includes/functions.php';?>
<?php
if(isset($_POST['submit'])) 
{ 
    $docno = $_POST['docno']; //document number
    $date = $_POST['date'];
    $title = $_POST['title'];
    $send = $_POST['send'];
//
 $sql = "INSERT INTO send ". "(docno,date, title,send) ".
        "VALUES('$docno','$date','$title','$send')";
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
       <h2>File send</h2>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
            <label for="docno">Document Number:</label>
            <input type="text" class="form-control" id="docno" placeholder="Enter Document Number" name="docno">
          </div>
          <div class="form-group">
            <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="date">
          </div>
          <div class="form-group">
            <label for="title">Subject:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Subject" name="title">
          </div>
          <div class="form-group">
            <label for="send">Send to:</label>
            <select class="form-control" name="send" id="send">
                <?php echo getDepList($conn);?>
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-default">Save</button>
        </form>
     </div>
    <!-- /.container -->
<?php include './includes/footer.php';?>