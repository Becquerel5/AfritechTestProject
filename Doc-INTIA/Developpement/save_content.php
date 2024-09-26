<?php
	require_once 'conn.php';
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$phone = $_POST['phone'];
		$assurances = $_POST['assurances'];
		$agency = $_POST['agency'];


		
		if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
			echo '<script>alert("Invalid name format."); history.go(-1);</script>';
			exit; 
		}
	  
		$checkQuery = "SELECT * FROM `clients` WHERE `name` = '$name'";
		$checkResult = $conn->query($checkQuery);
	  
		if ($checkResult->num_rows > 0) {
			echo '<script>alert("name already exists."); history.go(-1);</script>';
			exit; 
		}
		
		$sql = "INSERT INTO `clients`(`name`,`dob`,`phone`,`assurances`,`agency`) VALUES ('$name','$dob','$phone','$assurances','$agency')";
		$result = $conn->query($sql);
       
           if ($result === TRUE) {
               echo '<script>alert("Vous avez été enregistré avec succès"); history.go(-1);</script>';
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
           }
       
           $conn->close();
		
		
	}
?>