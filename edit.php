<?php 

include('config.php');

if(isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = "SELECT * FROM users WHERE id='$id'";
	$result = $db->query($sql);
	$user = mysqli_fetch_assoc($result);
	echo json_encode($user);
}

if(isset($_POST['eid'])){ 

	// print_r($_POST);

	$id = $_POST['eid'];
	$name = $_POST['eName'];
	$age = $_POST['eAge'];
	$city = $_POST['eCity'];

	$sql = "UPDATE users SET name='$name', age='$age', city='$city' WHERE id='$id'";

	echo $sql;
	if($db->query($sql)){
		echo "User Edit Complete";
	}else{
		echo "User Edit Error";
	}
	
  } ?>
