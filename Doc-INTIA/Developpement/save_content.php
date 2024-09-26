<?php
	require_once 'conn.php';
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$phone = $_POST['phone'];
		$assurances = $_POST['assurances'];
		$agency = $_POST['agency'];
		
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