<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<?php include './includes/functions.php';?>

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
        
        <!-- Modal sent delet  -->
        <div class="modal fade" id="sentDelete" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Sent File</h4>
                  </div>
                  <div class="modal-body">
                      <form id="delete_diry_form">
                          <input type="hidden" value="" name="del_diry" id="del_diry" />
                          <button type="button" name="diry_delete" id="diry_delete" class="btn btn-default">Delete</button>
                      </form>
                      <div id="deleteDiryResponse"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

            </div>
        </div>
        
        <!-- Modal receive delet  -->
        <div class="modal fade" id="receiveDelete" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Receive File</h4>
                  </div>
                  <div class="modal-body">
                      <form id="delete_dispatch_form">
                          <input type="hidden" value="" name="del_dispatch" id="del_dispatch" />
                          <button type="button" name="dispatch_delete" id="dispatch_delete" class="btn btn-default">Delete</button>
                      </form>
                      <div id="deleteDispatchResponse"></div>
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
    <script>
    $(document).ready(function() {
    $('#fileSent').DataTable();
} );</script>
    <script>
    $(document).ready(function() {
    $('#fileReceived').DataTable();
} );</script>
<script src="js/editSent.js"></script>
<script src="js/deleteSent.js"></script>
<script src="js/editReceive.js"></script>
<script src="js/deleteReceive.js"></script>
<script src="js/updateDiry.js"></script>
<script src="js/updateDispatch.js"></script>
<script src="js/deleteDiry.js"></script>
<script src="js/deleteDispatch.js"></script>