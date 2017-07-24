<?php  
 include 'includes/conn.php';
 
 //if(isset($_POST["diry"]))  
 //{    
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
 //}  
 ?> 