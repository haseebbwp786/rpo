<?php  
 include '../includes/conn.php';
    
 $del_diry = $_POST["del_diry"];
      
      echo $query = "DELETE FROM `diry` WHERE (`id`= '$del_diry')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>Record Deleted</p>';
      } else {
          echo 'check';
      }  
 //}  
 ?> 