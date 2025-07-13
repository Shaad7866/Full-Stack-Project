<?php
	include '../../connection.php';
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone_number = $_POST['phone_number'];
	$email_address = $_POST['email_address'];
	$password = $_POST['password'];

	$check = mysqli_query($con,"SELECT * FROM employee WHERE phone = '$phone_number'");
	if (mysqli_num_rows($check)>0) {
		echo "Account Already Exist";
	}
	else{
		if (mysqli_query($con,"INSERT INTO employee(first_name,last_name,email,phone,password) VALUES('$first_name','$last_name','$email_address','$phone_number','$password')")) {
			echo "ok";
		}
		else{
			echo "Oops Something Wrong";
		}
	}
?>