<?php  
 include 'includes/conn.php';
 
 //if(isset($_POST["diry"]))  
 //{    
      $deptName = mysqli_real_escape_string($conn, $_POST["deptName"]);
      $query = "INSERT INTO `dept_dir`(`list`) VALUES('$deptName')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>You have entered</p>';  
           echo '<p>Department: '.$deptName.'</p>';
      }  
 //}  
 ?> 