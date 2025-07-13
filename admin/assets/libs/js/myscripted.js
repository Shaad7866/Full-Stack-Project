$(document).ready(function(){
	/////////// Update Account ////////////////
	$('#update_account_btn').click(function(e){
		e.preventDefault();

		if ($('#userid').val()=="") {
			alert('Required User ID');
		}
		else if ($('#username').val()=="") {
			alert('Required Username');
		}
		else if ($('#phone_number').val()=="") {
			alert('Required Phone Number');
		}
		else if ($('#email_address').val()=="") {
			alert('Required Email Address');
		}
		else if ($('#password').val()=="") {
			alert('Required Password');
		}
		else{
			$.ajax({
				url:'ajax/update_account.php',
				type:'post',
				data: $('form').serialize(),
				dataType:'text',
				success:function(strMessage){
					if (strMessage=='ok') {
						swal({
						  title: "Good job!",
						  text: "Account Successfully Update",
						  icon: "success",
						}).then(function(){
							location.reload();
						});
						
					}
					else{
						swal({
						  title: "Oops!",
						  text: strMessage,
						  icon: "error",
						});
					}
					
				}
			});
		}
	});
	/////////// Add Employee ////////////////
	$('#addemp_btn').click(function(e){
		e.preventDefault();

		if ($('#first_name').val()=="") {
			alert('Required First Name');
		}
		else if ($('#last_name').val()=="") {
			alert('Required Last Name');
		}
		else if ($('#phone_number').val()=="") {
			alert('Required Phone Number');
		}
		else if ($('#email_address').val()=="") {
			alert('Required Email Address');
		}
		else if ($('#password').val()=="") {
			alert('Required Password');
		}
		else{
			$.ajax({
				url:'ajax/add_employee.php',
				type:'post',
				data: $('form').serialize(),
				dataType:'text',
				success:function(strMessage){
					if (strMessage=='ok') {
						swal({
						  title: "Good job!",
						  text: "Account Successfully Register",
						  icon: "success",
						}).then(function(){
							location.reload();
						});
						
					}
					else{
						swal({
						  title: "Oops!",
						  text: strMessage,
						  icon: "error",
						});
					}
					
				}
			});
		}
	});
	$('#add-size').click(function(e){
		e.preventDefault();
		var size = $('#product-size').val();
		var dimension = $('#dimension').val();
		if (size=='') {
			alert('Field Required');
			$('#product-size').focus();
			return false;
		}
		else{
			$.ajax({
				url:'ajax/ajax_product_size.php',
				type:'post',
				data:{product_size:size,dimension:dimension},
				dataType:'text',
				success:function(strMessage){
					if (strMessage=='ok') {
						swal({
						  title: "Good job!",
						  text: "You clicked the button!",
						  icon: "success",
						}).then(function(){
							location.reload();
						});
						
					}
					else{
						swal({
						  title: "Oops!",
						  text: strMessage,
						  icon: "error",
						});
					}
					
				}
			});
		}
	});

	$('#update-size').click(function(e){
		e.preventDefault();
		var usize = $('#usize').val();
		var udimension = $('#udimension').val();
		var sizeId = $('#sizeId').val();
		if (usize=='' || udimension=='') {
			alert('Field Required');
			return false;
		}
		else{
			$.ajax({
				url:'ajax/ajax_product_size.php',
				type:'post',
				data:{usize:usize,udimension:udimension,sizeId:sizeId},
				dataType:'text',
				success:function(strMessage){
					if (strMessage=='ok') {
						swal({
						  title: "Good job!",
						  text: "Data Successfully Updated!",
						  icon: "success",
						}).then(function(){
							location.reload();
						});
						
					}
					else{
						swal({
						  title: "Oops!",
						  text: strMessage,
						  icon: "error",
						});
					}
					
				}
			});
		}
	});


	///////////// Upload Product Category /////////////////

    $("#productForm").on("submit",function(e){
    	e.preventDefault();
    	var formData = new FormData(this);
	    if ($('#category-name').val()=='') {
	    	alert('Required Category Name');
	    	$('#category-name').focus();
	    	return false;
	    }
	    else  if ($('#category-image').val()=='') {
	    	alert('Required Category Image');
	    	return false;
	    }
	    // else  if ($('#catalouge').val()=='') {
	    // 	alert('Required Catalouge');
	    // 	return false;
	    // }
	    else{
	    	$('#add-products').attr('disabled','disabled');
	    	$('#add-products').val('Please Wait....');
	    	$.ajax({
	    		url: "ajax/add-category.php",
	    		type: "POST",
	    		data: formData,
	    		contentType: false,
	    		processData: false,
	    		success: function(strMessage){
	    			// $('#display-profile-img').html(strMessage);
	    			if (strMessage==='ok') {
	    				swal({
						  title: "Good job!",
						  text: "Data Successfully Updated!",
						  icon: "success",
						}).then(function(){
							location.reload();
						});
	    				$('#add-products').removeAttr("disabled");
		      			$('#add-products').val('Save & Submit');
	    			}
	    			else{
	    				alert(strMessage);
	    				$('#add-products').removeAttr("disabled");
		      			$('#add-products').val('Save & Submit');
	    			}
	    		}
	    	});
	    }
    	
    });

    ///////////////// Add Products ///////////////////////
    $('#addProductForm').on('submit',function(e){
    	e.preventDefault();
    	var formData = new FormData(this);
    	
    	if ($('#product-name').val()=='') {
    		alert('Required Product Name');
    		$('#product-name').focus();
    		return false;
    	}
    	else if ($('#category').val()=='none') {
    		alert('Required Category');
    		$('#category').focus();
    		return false;
    	}
    	else if ($('#size').val()=='none') {
    		alert('Required Product Size');
    		$('#size').focus();
    		return false;
    	}
    	else if ($('#product-image').val()=='') {
    		alert('Required Product Image');
    		$('#product-image').focus();
    		return false;
    	}
    	else{
    		$('#add-products').attr('disabled','disabled');
	    	$('#add-products').val('Please Wait....');
	    	$.ajax({
	    		url: "ajax/ajax-add-product.php",
	    		type: "POST",
	    		data: formData,
	    		contentType: false,
	    		processData: false,
	    		success: function(strMessage){
	    			// $('#display-profile-img').html(strMessage);
	    			if (strMessage==='ok') {
	    				swal({
						  title: "Good job!",
						  text: "Product Successfully Add!",
						  icon: "success",
						}).then(function(){
							location.reload();
						});
	    				$('#add-products').removeAttr("disabled");
		      			$('#add-products').val('Save & Submit');
	    			}
	    			else{
	    				swal({
						  title: "Oops!",
						  text: strMessage,
						  icon: "error",
						});
	    				$('#add-products').removeAttr("disabled");
		      			$('#add-products').val('Save & Submit');
	    			}
	    		}
	    	});
    	}
    });


});



function editSize(editSize){
	$('#editSizeModal').modal('show');
	$.ajax({
		url:'ajax/ajax_product_size.php',
		type:'post',
		data:{editSize:editSize},
		dataType:'text',
		success:function(strMessage){
			$('#fetch-size').html(strMessage);
		}
	});
}
function deleteSize(deleteSize){
	if (confirm("Do yo really want to delete this data")) {
		$.ajax({
			url:'ajax/ajax_product_size.php',
			type:'post',
			data:{deleteSize:deleteSize},
			dataType:'text',
			success:function(strMessage){
				if (strMessage=='ok') {
					swal({
					  title: "Good job!",
					  text: "Data Successfully Deleted!",
					  icon: "success",
					}).then(function(){
						location.reload();
					});
					
				}
				else{
					swal({
					  title: "Oops!",
					  text: strMessage,
					  icon: "error",
					});
				}
							
			}
		});
	}
}
function deleteCat(deleteCatId){
	$.ajax({
			url:'ajax/category-action.php',
			type:'post',
			data:{deleteCatId:deleteCatId},
			dataType:'text',
			success:function(strMessage){
				if (strMessage=='ok') {
					swal({
					  title: "Good job!",
					  text: "Data Successfully Deleted!",
					  icon: "success",
					}).then(function(){
						location.reload();
					});
					
				}
				else{
					swal({
					  title: "Oops!",
					  text: strMessage,
					  icon: "error",
					});
				}
							
			}
		});
}
function pcategory(categoryItem){
	
	var catItems = categoryItem.value;
	$.ajax({
		url:'ajax/fetch-dynamics-data.php',
		method:'post',
		data:{catItems:catItems},
		success:function(strMessage){
			$('#sub-category').html(strMessage);
		}
	})
}

function deleteproduct(pid){
	var productId = pid;
	$.ajax({
		url:'ajax/delete-product-data.php',
		method:'post',
		data:{productId:productId},
		success:function(strMessage){
			if (strMessage=='ok') {
				swal({
				  title: "Good job!",
				  text: "Data Successfully Deleted!",
				  icon: "success",
				}).then(function(){
					location.reload();
				});
				
			}
			else{
				swal({
				  title: "Oops!",
				  text: strMessage,
				  icon: "error",
				});
			}	
		}
	})
}

//////////// Delete Employee ///////////////
function delete_employee(employeeid){
  if (confirm("Are you sure..!")) {
	$.ajax({
		url:'ajax/delete-employee-data.php',
		method:'post',
		data:{employeeid:employeeid},
		success:function(strMessage){
			if (strMessage=='ok') {
				swal({
				  title: "Good job!",
				  text: "Account Successfully Deleted!",
				  icon: "success",
				}).then(function(){
					location.reload();
				});
				
			}
			else{
				swal({
				  title: "Oops!",
				  text: strMessage,
				  icon: "error",
				});
			}	
		}
	})
  }
}