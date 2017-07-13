<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#diry">Sent</a></li>
                <li><a data-toggle="tab" href="#received">Received</a></li>
            </ul>
            <div class="col-lg-12">
                <div class="tab-content">
                    <div id="diry" class="tab-pane fade in active">
                        <table class="table table-striped table-hover" id="example">
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
                                    $sql = "SELECT * FROM `diry` ORDER BY id DESC";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {?>
                                
                                            <tr>
                                                <td class="col-md-1"><?php echo $row["docno"];?></td>
                                                <td class="col-md-2"><?php echo date("d M, Y",strtotime($row["date"]));?></td>
                                                <td class="col-md-7"><?php echo $row["title"];?></td>  
                                                <td class="col-md-1"><?php echo $row["send"]; ?></td>
                                                <td class="col-md-1">
                                                    <div class="dropdown">
                                                       <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                       <span class="caret"></span></button>
                                                       <ul class="dropdown-menu">
                                                         <li><a href="#">Edit</a></li>
                                                         <li><a href="#">Delet</a></li>
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
                    </div>
                    <div id="received" class="tab-pane fade">
                       <table class="table table-striped table-hover">
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
                                                         <li><a href="#">Edit</a></li>
                                                         <li><a href="#">Delet</a></li>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

<?php include './includes/footer.php';?>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>