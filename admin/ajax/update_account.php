<?php
	include '../../connection.php';
	$loginid = $_POST['loginid'];
	$username = $_POST['username'];
	$phone_number = $_POST['phone_number'];
	$email_address = $_POST['email_address'];
	$password = $_POST['password'];

	if (mysqli_query($con,"UPDATE users SET username = '$username', phone = '$phone_number', email = '$email_address', password = '$password' WHERE id = '$loginid'")) {
		echo "ok";
	}
	else{
		echo "Oops Something Wrong";
	}

?>