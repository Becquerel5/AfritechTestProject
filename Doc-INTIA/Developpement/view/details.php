<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<?php 
include "config.php";



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `clients` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$dob = $row['dob'];
			$phone = $row['phone'];
			$assurances = $row['assurances'];
			$agency = $row['agency'];
		
			$id = $row['id'];
		}

	?>
		
		




        <form action="save_content.php" method="POST" >
				<div class="modal-content">
					<div class="modal-body">
                    <center><h2>clients Details information</h2></center>
						<div class="col-md-2"></div>
						<div class="col-md-8">
						<div class="form-group">
								<!--label>Id</label>
								<input type="text" class="form-control" name="Id" />
							</div-->
							<div class="form-group">
								<label>name</label>
								<input type="text" class="form-control" name="name" value="<?php echo $name; ?>"/ disabled>
							</div>
							<div class="form-group">
								<label>Date of Birth</label>
								<input type="text" class="form-control" name="dob" value="<?php echo $dob; ?>"/ disabled>
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>"/ disabled>
							</div>
							<div class="form-group">
								<label>Assurances type</label>
								<input type="text" class="form-control" name="assurances" value="<?php echo $assurances; ?>"/ disabled>
							</div>
							<div class="form-group">
								<label>Agency</label>
								<input type="text" class="form-control" name="agency" value="<?php echo $agency; ?>"/ disabled>
							</div>
						
						
						
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
					</div>
				</div>
			</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>