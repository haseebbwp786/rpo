<?php  
 include 'includes/conn.php';
 
 //if(isset($_POST["diry"]))  
 //{  
      $docno = mysqli_real_escape_string($conn, $_POST["docno"]);  
      $date = mysqli_real_escape_string($conn, $_POST["date"]);
      $title = mysqli_real_escape_string($conn, $_POST["title"]);  
      $send = mysqli_real_escape_string($conn, $_POST["send"]);
      $query = "INSERT INTO diry(docno, date, title, send) VALUES ('".$docno."', '".$date."', '".$title."', '".$send."')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<p>You have entered</p>';  
           echo '<p>Document Number:'.$docno.'</p>';  
           echo '<p>Date : '.$date.'</p>';
           echo '<p>Title:'.$title.'</p>';  
           echo '<p>Send To : '.$send.'</p>';
      }  
 //}  
 ?> 