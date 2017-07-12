<?php include './includes/conn.php';?>
<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                    mysqli_select_db($conn, $dbname);
                    $sql = "SELECT * FROM `diry`";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Document Number: " . $row["docno"]. " - Date: " . $row["date"]. " -Subject: " . $row["title"].  
                                    " - Send to: " . $row["send"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn); 
                ?>
            </div>
        </div>
    </div>
    <!-- /.container -->

<?php include './includes/footer.php';?>