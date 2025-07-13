<?php
	session_start();
	setcookie('admin_id',$_SESSION['admin_id'],60);
	unset($_SESSION['admin_id']);
        header('location:../index.php');
        die();
?>