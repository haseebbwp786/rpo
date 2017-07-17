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
           echo '<p>Name:'.$docno.'</p>';  
           echo '<p>Message : '.$date.'</p>';
           echo '<p>Name:'.$title.'</p>';  
           echo '<p>Message : '.$send.'</p>';
      } else {
          echo 'check';
      }
