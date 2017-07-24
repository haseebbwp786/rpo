<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<?php include './includes/functions.php';?>

<!-- Page Content -->
    <div class="container">
       <h2>File send</h2>
           <?php include './partial/diryFormSubmit.php';?>
       <div id="response"></div>
       
       <!-- Modal -->
        <div class="modal fade" id="addNewDept" role="dialog">
            <?php include './partial/addNewDepartment.php';?>
        </div>
       
     </div>
    <!-- /.container -->
    
<?php include './includes/footer.php';?>
<script src="js/insertDiry.js"></script>
<script src="js/addDepartment.js"></script>