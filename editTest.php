<?php
include 'includes/conn.php';
  //$id = $_POST["id"];
    $id = 1;
      //$docno = mysqli_real_escape_string($conn, $_POST["docno"]); 
    $docno = "update test";
      //$date = mysqli_real_escape_string($conn, $_POST["date"]);
    $date = 7/17/2017;
      //$title = mysqli_real_escape_string($conn, $_POST["title"]);  
    $title = "update test"; 
      $send = "test";
      $query = "UPDATE `diry` SET `docno`= '$docno',`date`=$date,`title`='$title',`send`='$send' WHERE (`id`= $id)";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>You have entered</p>';  
           echo '<p>Documbent Number :'.$docno.'</p>';  
           echo '<p>Date : '.$date.'</p>';
           echo '<p>Title :'.$title.'</p>';  
           echo '<p>Sent To : '.$send.'</p>';
      } else {
          echo 'check';
      }
for($id_diry=0; $id_diry <= 10; $id_diry++){
    echo "The number is: $id_diry <br>";
}

?>