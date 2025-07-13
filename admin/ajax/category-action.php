<?php
	include '../../connection.php';
	if (isset($_POST['deleteCatId'])) {
		$catId=$_POST['deleteCatId'];
	  	$getimage=mysqli_query($con,"SELECT * FROM category WHERE id='$catId'");
	  	if (mysqli_num_rows($getimage)>0) {
	  		$frow=mysqli_fetch_assoc($getimage);
	  		$image=$frow['images'];
	  		$catalouge=$frow['catalouge'];
	  	}

	  	if ($catalouge!='') {
	  		if (mysqli_query($con,"DELETE FROM category WHERE id='$catId'")) {
		  		echo "ok";
		  		unlink($image);
		  		unlink($catalouge);
		  	}
		  	else{
		  		echo "Something Wrong";
		  	}
	  	}
	  	else{
	  		if (mysqli_query($con,"DELETE FROM category WHERE id='$catId'")) {
		  		echo "ok";
		  		unlink($image);
		  	}
		  	else{
		  		echo "Something Wrong";
		  	}
	  	}
	  	
	}
?>