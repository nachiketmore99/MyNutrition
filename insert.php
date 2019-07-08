<?php
	$con = mysqli_connect('localhost', 'nachiketmore99', '90787098', '');

	if (!$con) {
		echo "Not Connected";
	}
	if (!mysqli_select_db($con,'feedback')) {
		echo 'Database Not Selected';
	}

	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Message = $_POST['message'];

	$sql = "INSERT INTO feedback (name, email, message) VALUES ('$Name' , '$Email' , '$Message')";

	if(!mysqli_query($con, $sql)){
		echo "Not Inserted";
	}
	else{
		echo "Inserted";
	}
	header("refresh:2; url=contact.html");
?>