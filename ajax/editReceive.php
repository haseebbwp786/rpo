<?php
include '../includes/conn.php';
$dispatch_id = trim($_REQUEST['id']);



//$query="select * from alpp_emp where emp_file =  $data->id ; ";
$query="SELECT * FROM dispatch "
                            . " WHERE id = '$dispatch_id' "
                            . " limit 0,1 ;";


$result = $conn->query($query) or die($conn->error.__LINE__);
$arr = array();
if($result->num_rows > 0) {
	$row = $result->fetch_assoc();	
}
// create array

 
// make it json format
print_r(json_encode($row));
?>

