<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<?php include './includes/functions.php';?>
<?php echo addDepartment($conn);?>

<!-- Page Content -->
    <div class="container">
       <h2>File send</h2>
            <?php echo getDiryFormSubmit($conn);?>
       <div id="response"></div>
       
       <!-- Modal -->
        <div class="modal fade" id="addNewDept" role="dialog">
            <?php echo getModelAddNewDepartment($conn);?>
        </div>
       
     </div>
    <!-- /.container -->
    
<?php include './includes/footer.php';?>
    <script src="js/insertDiry.js"></script>