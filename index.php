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
                       <table class="table">
                            <thead>
                                <tr>
                                  <th>Document Number</th>
                                  <th>Date</th>
                                  <th>Subject</th>
                                  <th>Send to</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    mysqli_select_db($conn, $dbname);
                                    $sql = "SELECT * FROM `diry`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr><td>" . $row["docno"]. "</td><td>" . $row["date"]. "</td><td>" . $row["title"].  
                                                    "</td><td>" . $row["send"]. "</td></tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="received" class="tab-pane fade">
                       <table class="table">
                            <thead>
                                <tr>
                                  <th>Document Number</th>
                                  <th>Date</th>
                                  <th>Subject</th>
                                  <th>Send to</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    mysqli_select_db($conn, $dbname);
                                    $sql = "SELECT * FROM `dispatch`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr><td>" . $row["docno"]. "</td><td>" . $row["date"]. "</td><td>" . $row["title"].  
                                                    "</td><td>" . $row["received"]. "</td></tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    mysqli_close($conn); 
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