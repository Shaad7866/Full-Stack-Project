<?php
	include '../../connection.php';
	$status='1';
	$pid='GC'.rand(1111,9999);
	$title=$_POST['product_name'];
	$category=$_POST['category'];
	$sub_category=$_POST['sub_category'];
	$size=$_POST['size'];
	$size_type=$_POST['size_type'];
	$sort_desc=$_POST['sort_desc'];
	$long_desc=$_POST['long_desc'];

	$product_gallery=$_FILES['product_gallery'];
	$num_of_gallery=count($product_gallery['name']);

	$product_image=$_FILES['product_image']['name'];
	$product_extension = pathinfo($product_image, PATHINFO_EXTENSION);
	$valid_product_extension = array("jpg","jpeg","png","svg");
	if (in_array($product_extension, $valid_product_extension)){
		$pnew_name = rand().".".$product_extension;
		$path = "upload/".$pnew_name;
		 if (move_uploaded_file($_FILES['product_image']['tmp_name'], $path)) {

		 	if(mysqli_query($con,"INSERT INTO products(title,short_description,long_description,product_image,size,size_type,category,subcategory,status,product_id) VALUES('$title','$sort_desc','$long_desc','$path','$size','$size_type','$category','$sub_category','$status','$pid')")){
			 		for ($i=0; $i < $num_of_gallery; $i++) { 
						$gallery_name = $product_gallery['name'][$i];
						$temp_gallery = $product_gallery['tmp_name'][$i];
						$error_gallery = $product_gallery['error'][$i];

						if ($error_gallery===0) {
							$gallery_ex = pathinfo($gallery_name, PATHINFO_EXTENSION);
							$gallery_ex_lc = strtolower($gallery_ex);
							$gallery_allowed_ex = array("jpg","jpeg","png","svg");
							if (in_array($gallery_ex_lc,$gallery_allowed_ex)) {
								$new_gallery_img_name = 'IMG'.rand().'.'.$gallery_ex_lc;
								$gallery_upload_path = 'upload/'.$new_gallery_img_name;
								if(move_uploaded_file($temp_gallery, $gallery_upload_path)){
									mysqli_query($con,"INSERT INTO product_galery(images,product_id) VALUES('$gallery_upload_path','$pid')");
								}
							}
						}
					}
					echo "ok";
		 		}
		 		else{
		 			echo "Something Wrong";
		 			unlink($path);
		 		}
		 }
	}
	else{
	    echo "Invalid File Format";
	}

?>