<?php
include 'conn.php';
function getDepList($conn){
    
    $sql = "SELECT `list` FROM `dept_dir`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option>" . $row["list"]. "</option>" ."<br>";
        }
    } else {
        echo "0 results";
    }
}
function getModelSent($conn){?>
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Sent File</h4>
          </div>
          <div class="modal-body">
              <form id="update_diry_form">
                  <input type="hidden" value="" name="diry_id" id="diry_id" />
                <div class="form-group">
                  <label for="s_docno">Document Number:</label>
                  <input type="text" name="docno" id="s_docno" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="s_date" class="col-2 col-form-label">Date and time</label>
                  <input type="text" value="" id="s_date" class="form-control"  name="date"/>
                </div>
                <div class="form-group">
                  <label for="s_title">Subject:</label>
                  <input type="text" name="title" id="s_title" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="s_send">Send to:</label>
                  <select class="form-control" name="send" id="s_send">
                      <?php echo getDepList($conn);?>
                  </select>
                </div>
                  <button type="button" name="updat_diry" id="updat_diry" class="btn btn-default">Update</button>
              </form>
              <div id="updateDiryResponse"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

    </div>
<?php }

 function getModelReceive($conn){?>
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Receive File</h4>
          </div>
          <div class="modal-body">
              <form id="update_dispatch_form">
                  <input type="hidden" value="" name="dispatch_id" id="dispatch_id" />
                <div class="form-group">
                  <label for="r_docno">Document Number:</label>
                  <input type="text" class="form-control" id="r_docno" placeholder="Enter Document Number" name="docno">
                </div>
                <div class="form-group">
                  <label for="r_date" class="col-2 col-form-label">Date and time</label>
                  <input type="text" value="" id="r_date" class="form-control"  name="date"/>
                </div>
                <div class="form-group">
                  <label for="r_title">Subject:</label>
                  <input type="text" class="form-control" id="r_title" placeholder="Enter Subject" name="title">
                </div>
                <div class="form-group">
                  <label for="r_received">Received From:</label>
                  <select class="form-control" name="received" id="r_received">
                      <?php echo getDepList($conn);?>
                  </select>
                </div>
                  <button type="button" name="update_dispatch" id="update_dispatch" class="btn btn-default">Update</button>
              </form>
              <div id="updateDispatchResponse"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

    </div>
     
 <?php }
 
 function getDiry($conn){?>
     <table class="table table-striped table-hover" id="fileSent">
        <thead>
            <tr>
              <th class="col-md-1">Document Number</th>
              <th class="col-md-2">Date</th>
              <th class="col-md-6">Subject</th>
              <th class="col-md-1">Send to</th>
              <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM `diry` ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {?>
                    <?php $idDiry = $row["id"]?>
            
                        <tr>
                            <td class="col-md-1"><?php echo $row["docno"];?></td>
                            <td class="col-md-2"><?php echo date("d M, Y",strtotime($row["date"]));?></td>
                            <td class="col-md-6"><?php echo $row["title"];?></td>  
                            <td class="col-md-1"><?php echo $row["send"]; ?></td>
                            <td class="col-md-1">
                                <div class="dropdown">
                                   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                   <span class="caret"></span></button>
                                   <ul class="dropdown-menu">
                                     <li><a  href="#" id="<?php echo $idDiry;?>" class="sent_edit_button"  role = "menuitem" tabindex = "-1"  data-toggle="modal" data-target="#sentEdit" >Edit</a></li>
                                     <li><a  href="#" id="<?php echo $idDiry;?>" class="sent_delete_button"  role = "menuitem" tabindex = "-1"  data-toggle="modal" data-target="#sentDelete" >Delet</a></li>
                                   </ul>
                                </div>
                            </td>
                        </tr>
                    <?php }
                } else {?>
                        <tr>
                            <td colspan="6">
                                No Result
                            </td>
                        </tr>

                <?php }
            ?>
        </tbody>
    </table>
 <?php }
 
 function getReceive($conn){?>
     <table class="table table-striped table-hover" id="fileReceived">
        <thead>
            <tr>
              <th class="col-md-1">Document Number</th>
              <th class="col-md-2">Date</th>
              <th class="col-md-7">Subject</th>
              <th class="col-md-1">Send to</th>
              <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM `dispatch` ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {?>
                        <?php $idDispatch = $row["id"]?>
                        <tr>
                            <td class="col-md-1"><?php echo $row["docno"];?></td>
                            <td class="col-md-2"><?php echo date("d M, Y",strtotime($row["date"]));?></td>
                            <td class="col-md-7"><?php echo $row["title"];?></td>  
                            <td class="col-md-1"><?php echo $row["received"]; ?></td>
                            <td class="col-md-1">
                                <div class="dropdown">
                                   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                   <span class="caret"></span></button>
                                   <ul class="dropdown-menu">
                                     <li><a  href="#" id="<?php echo $idDispatch;?>" class="receive_edit_button"  role = "menuitem" tabindex = "-1"  data-toggle="modal" data-target="#receiveEdit" >Edit</a></li>
                                     <li><a href="#" id="<?php echo $idDispatch;?>" class="receive_Delete_button"  role = "menuitem" tabindex = "-1"  data-toggle="modal" data-target="#receiveDelete" >Delet</a></li>
                                   </ul>
                                </div>
                            </td>
                        </tr>
                    <?php }
                } else {?>
                        <tr>
                            <td colspan="6">
                                No Result
                            </td>
                        </tr>
                <?php }
            ?>
        </tbody>
    </table>
 <?php }

 ?>