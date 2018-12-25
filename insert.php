<?php 

// var_dump($_POST);
// print_r($_POST);

include('config.php');

if(isset($_POST)){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$city = $_POST['city'];
	$sql = "INSERT INTO users VALUES ('','$name', $age, '$city')";
	if($db->query($sql)){
		echo "User Added";
	}
}


 ?>