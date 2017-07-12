<?php

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
?>