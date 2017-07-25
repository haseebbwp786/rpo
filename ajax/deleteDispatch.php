<?php  
 include '../includes/conn.php';
    
 $del_dispatch = $_POST["del_dispatch"];
      
      echo $query = "DELETE FROM `dispatch` WHERE (`id`= '$del_dispatch')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>Record Deleted</p>';
      } else {
          echo 'check';
      }  
 //}  
 ?> 