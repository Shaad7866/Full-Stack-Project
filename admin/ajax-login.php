<?php
	include '../connection.php';
	session_start();
	if (isset($_POST['username'])) {
		$username=$_POST['username'];
    	$password=$_POST['password'];
		
		$qry=mysqli_query($con,"SELECT * FROM users WHERE userid='$username' && password='$password'");
		if (mysqli_num_rows($qry)>0) {
			$row=mysqli_fetch_assoc($qry);
		
			$_SESSION['admin_id']=$row['userid'];
	        setcookie('admin_id',$row['userid'],time()+60*60*24*365);
	        echo "ok";
	        die();
		}
		else{
			
			echo "error";
		}
	}		
?>