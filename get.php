<?php 

include('config.php');

$sql = "SELECT * FROM users";
$users = $db->query($sql);

while($user = mysqli_fetch_assoc($users)){?>
	<tr>
		<td><?= $user['id']; ?></td>
		<td><?= $user['name']; ?></td>
		<td><?= $user['age']; ?></td>
		<td><?= $user['city']; ?></td>
		<td><button class="btn btn-sm btn-info" onclick="editUser(<?=  $user['id']; ?>)"><i class="fa fa-edit"></i></button></td>
		<td><button class="btn btn-sm btn-danger" onclick="deleteUser(<?=  $user['id']; ?>)"><i class="fa fa-trash"></i></button></td>
	</tr>
<?php }

 ?>