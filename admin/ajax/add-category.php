<?php
	include '../../connection.php';

	$category_name=$_POST['category_name'];
	$sub_category=$_POST['sub_category'];
	$description=$_POST['description'];
	$cimage=$_FILES['category_image']['name']; //Category Image
	$catalouge=$_FILES['catalouge']['name']; // Catalouge
	if ($catalouge!='') {
		$cat_extension = pathinfo($cimage, PATHINFO_EXTENSION);
		$catalouge_extension = pathinfo($catalouge, PATHINFO_EXTENSION);
		  $valid_cat_extension = array("jpg","jpeg","png","svg");
		  $valid_catalouge_extension = array("pdf");
		  if (in_array($cat_extension, $valid_cat_extension) && in_array($catalouge_extension, $valid_catalouge_extension)) {
		     $cnew_name = rand().".".$cat_extension;
		     $catalougenew_name = rand().".".$catalouge_extension;
		     $catpath = "upload/".$cnew_name;
		     $catalougepath = "upload/".$catalougenew_name;
		     if (move_uploaded_file($_FILES['category_image']['tmp_name'], $catpath) && move_uploaded_file($_FILES['catalouge']['tmp_name'], $catalougepath)) {
		        
	        	if (mysqli_query($con,"INSERT into category(category,sub_category,description,images,catalouge) VALUES('$category_name','$sub_category','$description','$catpath','$catalougepath')")) {
	        		echo "ok";
	        		die();
	        	}
	        	else{
	        		echo "Oops Something Wrong";
	        		unlink($catpath);
	        		die();
	        	}
		        
		     }
		  }
		  else{
		     echo "Invalid File Format";
		  }
	}
	else{
		$catalouge="";
		$cat_extension = pathinfo($cimage, PATHINFO_EXTENSION);
		  $valid_cat_extension = array("jpg","jpeg","png","svg");
		  if (in_array($cat_extension, $valid_cat_extension)) {
		     $cnew_name = rand().".".$cat_extension;
		     $catpath = "upload/".$cnew_name;
		     if (move_uploaded_file($_FILES['category_image']['tmp_name'], $catpath)) {
		        
	        	if (mysqli_query($con,"INSERT into category(category,sub_category,description,images,catalouge) VALUES('$category_name','$sub_category','$description','$catpath','$catalouge')")) {
	        		echo "ok";
	        		die();
	        	}
	        	else{
	        		echo "Oops Something Wrong";
	        		unlink($catpath);
	        		die();
	        	}
		        
		     }
		  }
		  else{
		     echo "Invalid File Format";
		  }
	}
	


	  

?>