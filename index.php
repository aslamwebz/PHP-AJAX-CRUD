<!DOCTYPE html>
<html>
<head>
	<title>Ajax PHP CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
	<div class="jumbotron">
		<h1>Web Design</h1>
		<h4>Full Crud with AJAX and PHP</h4>
	</div>
</div>

<div id="studentTable">
	<div class="row">
		<div class="col-md-4">
			<div class="container" id="add">
				<h3>Add Students</h3>
				<form action="" id="aForm">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input type="number" name="age" id="age" placeholder="Enter Age" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">City</label>
						<input type="text" name="city" id="city" placeholder="Enter City" class="form-control" required>
					</div>
					<button class="btn btn-success" name="submit" id="submit">Submit</button>
				</form>
			</div>
			<div class="container" id="edit">
				<h3>Edit Students</h3>
				<form action="" id="eForm">		
			        <input type="hidden" id="eid" name="eid"> 
					<div class="form-group">
						<label for="">Name</label>
						<input type="text"  id="eName" name="eName"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input type="number" id="eAge" name="eAge" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">City</label>
						<input type="text" id="eCity" name="eCity" class="form-control" required>
					</div>
					<button class="btn btn-success float-left" id="editSubmit">Submit</button>
				</form>
				<button class="btn btn-info float-right" name="cancel" id="cancel">Cancel</button>
			</div>
		</div>
		<div class="col-md-8">
			<div class="container">
			<h3>Student Details</h3>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>NO</th>
							<th>NAME</th>
							<th>AGE</th>
							<th>CITY</th>
							<th>EDIT</th>
							<th>DELETE</th>
						</tr>
					</thead>
					<tbody id="t-body">
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="app.js"></script>
</body>
</html>