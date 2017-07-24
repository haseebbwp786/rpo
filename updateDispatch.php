<?php  
 include 'includes/conn.php';
 
 //if(isset($_POST["diry"]))  
 //{    
      $dispatch_id = $_POST["dispatch_id"];
      $docno = mysqli_real_escape_string($conn, $_POST["docno"]);
      $date = mysqli_real_escape_string($conn, $_POST["date"]);
      $title = mysqli_real_escape_string($conn, $_POST["title"]); 
      $received = mysqli_real_escape_string($conn, $_POST["received"]);
      
      $query = "UPDATE `dispatch` SET `docno`= '$docno',`date`='$date',`title`='$title',`received`='$received' WHERE (`id`= '$dispatch_id')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>Record Updated</p>';  
           echo '<p>Document Number :'.$docno.'</p>';  
           echo '<p>Date : '.$date.'</p>';
           echo '<p>Title :'.$title.'</p>';  
           echo '<p>Sent To : '.$received.'</p>';
      } else {
          echo 'check';
      }  
 //}  
 ?> 