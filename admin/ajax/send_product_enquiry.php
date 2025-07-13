<?php
	include '../../connection.php';
	$username = $_POST['username'];
	$userphone = $_POST['userphone'];
	$product_size = $_POST['product_size'];
	$product = $_POST['product'];
	$description = $_POST['description'];

	if (mysqli_query($con,"INSERT INTO quick_enquiry(name,phone,product_name,product_size,message) VALUES('$username','$userphone','$product','$product_size','$description')")) {
		echo "ok";
	}
	else{
		echo "Oops Something Wrong";
		die();
	}

?>