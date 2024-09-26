<?php 
include "config.php";

if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	
	$sql = "DELETE FROM `clients` WHERE `id`='$user_id'";

	

	$result = $conn->query($sql);

	/*if ($result == TRUE) {
		echo "Record deleted successfully.";
		header('Location: view.php');
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}*/




	if ($result === TRUE) {
		echo '<script>alert("ecord deleted successfully"); history.go(-1);</script>';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


}

?>

