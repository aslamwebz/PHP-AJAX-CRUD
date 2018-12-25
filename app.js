$(document).ready(() => {
	getUsers();

	$('#edit').hide();

	$('#submit').on('click', (e) => {
		e.preventDefault();
		$.ajax({
			url:'insert.php',
			type:'POST',
			data:$('#aForm').serialize() ,
			success:(d) => {
				$('#aForm')[0].reset();
				getUsers();
			},
		});
	});

	$('#cancel').on('click', cancel);


	$('#editSubmit').on('click', (e) => {
		e.preventDefault();
		$.ajax({
			url:'edit.php',
			type:'POST',
			data:$('#eForm').serialize(),
			success:(d) => {
				$('#add').show();
				$('#edit').hide();
				getUsers();
			},
		});	
	});	
});


function getUsers(){
	$.ajax({
		url:'get.php',	
		type:'POST',
		success:(d) => {
			$('#t-body > tr').remove();
			$('#t-body').append(d);
		}
	});
}

function editUser(id){
	$('#add').hide();
	$('#edit').show();
	$.ajax({
		url:'edit.php',
		data:{id :id},
		type:'POST',
		success:(data) => {
			var obj = JSON.parse(data);
			$('#eid').val(obj.id);
			$('#eName').val(obj.name);
			$('#eAge').val(obj.age);
			$('#eCity').val(obj.city);
		}
	});
}

function deleteUser(id){
		$.ajax({
		url:'delete.php',
		data:{id :id},
		type:'POST',
		success:(data) => {
			getUsers();
		},
	});
}

function cancel(){
	$('#add').show();
	$('#edit').hide();
}

