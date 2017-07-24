<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<?php include './includes/functions.php';?>
<?php 
if(isset($_POST["updat_diry"]))  
 {  
      $id = $_POST["diry_id"];
      $docno = mysqli_real_escape_string($conn, $_POST["docno"]);
      $date = mysqli_real_escape_string($conn, $_POST["date"]);
      $title = mysqli_real_escape_string($conn, $_POST["title"]); 
      $send = mysqli_real_escape_string($conn, $_POST["send"]);
      
      $query = "UPDATE `diry` SET `docno`= '$docno',`date`='$date',`title`='$title',`send`='$send' WHERE (`id`= '$id')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>Record Updated</p>';  
           echo '<p>Document Number :'.$docno.'</p>';  
           echo '<p>Date : '.$date.'</p>';
           echo '<p>Title :'.$title.'</p>';  
           echo '<p>Sent To : '.$send.'</p>';
      } else {
          echo 'check';
      }  
 }
?>
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#diry">Sent</a></li>
                <li><a data-toggle="tab" href="#received">Received</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                <div id="diry" class="tab-pane fade in active">
                    <!-- Sent-->
                    <?php echo getDiry($conn);?>
                </div>
                <div id="received" class="tab-pane fade">
                    <!-- receive-->
                   <?php echo getReceive($conn);?>
                </div>
            </div>
        </div>
        <!-- Modal Sent-->
        <div class="modal fade" id="sentEdit" role="dialog">
          <?php echo getModelSent($conn);?>
        </div>
        <!-- Modal Receive -->
        <div class="modal fade" id="receiveEdit" role="dialog">
            <?php echo getModelReceive($conn);?>
        </div>
    </div>
    <!-- /.container -->

<?php include './includes/footer.php';?>
    <script>
    $(document).ready(function() {
    $('#fileSent').DataTable();
} );</script>
    <script>
    $(document).ready(function() {
    $('#fileReceived').DataTable();
} );</script>
<script src="js/editSent.js"></script>
<script src="js/editReceive.js"></script>