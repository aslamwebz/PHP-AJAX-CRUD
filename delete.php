<?php 
include('config.php');

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id='$id'";


if($db->query($sql)){
	echo "User Deleted";
}else{
	echo "Error Deleting User";
}
	
 ?>
