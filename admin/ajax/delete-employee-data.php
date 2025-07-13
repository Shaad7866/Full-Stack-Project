<?php
	include '../../connection.php';
	if ($_POST['employeeid']!=="") {
		$employeeid = $_POST['employeeid'];
		if (mysqli_query($con,"DELETE FROM employee WHERE id = '$employeeid'")) {
			echo "ok";
		}
		else{
			echo "Oops Something Wrong";
		}
	}
?>