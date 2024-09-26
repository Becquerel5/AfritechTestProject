<?php
include "config.php";

$query = "SELECT name,dob,phone,assurances,agency FROM clients";
$result = mysqli_query($conn, $query);




?>

<!DOCTYPE html>
<html>

<head>
	<title>View Page</title>
	<!-- to make it looking good im using bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
</head>

<body>




	<div class="container">
		<h2>Manage clients</h2>
		
		<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add client</button-->

		

		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>dob</th>
					<th>phone</th>
					<th>assurances</th>
					<th>agency</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
include "config.php";

$query = "SELECT id,name,dob,phone,assurances,agency FROM clients";
$result = mysqli_query($conn, $query);


				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = mysqli_fetch_assoc($result)) {
				?>

						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['dob']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['assurances']; ?></td>
							<td><?php echo $row['agency']; ?></td>

							<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
							<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							&nbsp;
							<a class="btn btn-primary" href="details.php?id=<?php echo $row['id']; ?>">details</a>
						</td>
						</tr>

				<?php		}
				}
				?>

			</tbody>
		</table>
	</div>








	<?php
	include "config.php";

	//write the query to get data from users table

	$sql1 = "SELECT * FROM clients";

	//execute the query

	$result1 = $conn->query($sql1);


	?>


	</head>

	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_content.php" method="POST" >
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
						<div class="form-group">
								
							<div class="form-group">
								<label>name</label>
								<input type="text" class="form-control" name="name" />
							</div>
							<div class="form-group">
								<label>Date of Birth</label>
								<input type="text" class="form-control" name="dob" />
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" />
							</div>
							<div class="form-group">
								<label>Assurances type</label>
								<input type="text" class="form-control" name="assurances" />
							</div>
							<div class="form-group">
								<label>Agency</label>
								<input type="text" class="form-control" name="agency" />
							</div>
						
						
						
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>