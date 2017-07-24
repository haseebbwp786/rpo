<?php  
 include 'includes/conn.php';
 
 //if(isset($_POST["diry"]))  
 //{  
      $docno = mysqli_real_escape_string($conn, $_POST["docno"]);  
      $date = mysqli_real_escape_string($conn, $_POST["date"]);
      $title = mysqli_real_escape_string($conn, $_POST["title"]);  
      $received = mysqli_real_escape_string($conn, $_POST["received"]);
      $query = "INSERT INTO dispatch(docno, date, title, received) VALUES ('".$docno."', '".$date."', '".$title."', '".$received."')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>You have entered</p>';  
           echo '<p>Document Number :'.$docno.'</p>';  
           echo '<p>Date : '.$date.'</p>';
           echo '<p>Title:'.$title.'</p>';  
           echo '<p>Received From : '.$received.'</p>';
      }  
 //}  
 ?> 