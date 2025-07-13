<?php
	include '../../connection.php';

	if (isset($_POST['productId'])) {
		$productId=$_POST['productId'];
	  	// Product Image
		$getimage=mysqli_query($con,"SELECT * FROM products WHERE id='$productId'");
	  	if (mysqli_num_rows($getimage)>0) {
	  		$frow=mysqli_fetch_assoc($getimage);
	  		$image=$frow['product_image'];
	  		$product_id=$frow['product_id'];
	  	}
	  	// Gallery Image
	  	$galleryimage=mysqli_query($con,"SELECT * FROM product_galery WHERE product_id='$product_id'");
	  	if (mysqli_num_rows($galleryimage)>0) {
	  		$grow=mysqli_fetch_assoc($galleryimage);
	  		$gimage=$grow['images'];
	  		if (mysqli_query($con,"DELETE FROM product_galery WHERE product_id='$product_id'")) {
				unlink($gimage);
			}
	  	}

		if (mysqli_query($con,"DELETE FROM products WHERE id='$productId'")) {
			echo "ok";
			unlink($image);
		}
		else{
			echo "Oops Something Wrong";
		}
	}

?>