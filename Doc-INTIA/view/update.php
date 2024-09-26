<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

<?php 
include "config.php";


	if (isset($_POST['update'])) {
		$user_id = $_POST['user_id'];
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$phone = $_POST['phone'];
		$assurances = $_POST['assurances'];
		$agency = $_POST['agency'];
	

		// write the update query
		$sql = "UPDATE `clients` SET `id`='$id', `name`='$name',`dob`='$dob',`phone`='$phone',`assurances`='$assurances',`agency`='$agency' WHERE `id`='$user_id'";
	

		// execute the query
		$result = $conn->query($sql);

		/*if ($result == TRUE) {
			echo "Record updated successfully.";
			header('Location: view.php');
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}*/

		if ($result === TRUE) {
			echo '<script>alert("Vous avez été modifié avec succès"); history.go(-1);</script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
		$conn->close();
	}



if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	$sql = "SELECT * FROM `clients` WHERE `id`='$user_id'";

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


		<form action="" method="POST" >
				<div class="modal-content">
					<div class="modal-body">
                    <center><h2>clients Update Form</h2></center>
						<div class="col-md-2"></div>
						<div class="col-md-8">
						<div class="form-group">
								<!--label>Id</label>
								<input type="text" class="form-control" name="Id" />
							</div-->
							<div class="form-group">
								<label>name</label>
								<input type="hidden" name="user_id" value="<?php echo $id; ?>">
								<input type="text" class="form-control" name="name" value="<?php echo $name; ?>"/ >
							</div>
							<div class="form-group">
								<label>Date of Birth</label>
								<input type="text" class="form-control" name="dob" value="<?php echo $dob; ?>"/ >
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>"/ >
							</div>
							<div class="form-group">
								<label>Assurances type</label>
								<input type="text" class="form-control" name="assurances" value="<?php echo $assurances; ?>"/ >
							</div>
							<div class="form-group">
								<label>Agency</label>
								<input type="text" class="form-control" name="agency" value="<?php echo $agency; ?>"/ >
							</div>
						
						
							<input type="submit" value="update" name="update">
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
		header('Location: view.php');
	}

}
?>