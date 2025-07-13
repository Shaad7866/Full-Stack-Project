$(document).ready(function(){
	$('#sendenquiry').click(function(e){
		e.preventDefault();
		if ($('#username').val()=="") {
			alert('Required Username');
			return false;
		}
		else if ($('#userphone').val()=="") {
			alert('Required Phone Number');
			return false;
		}
		else if ($('#product').val()=="") {
			alert('Required Product');
			return false;
		}
		else if ($('#product_size').val()=="") {
			alert('Required Product Size');
			return false;
		}
		else{
			$.ajax({
				url:'admin/ajax/send_product_enquiry.php',
				type:'post',
				data: $('form').serialize(),
				dataType:'text',
				success:function(strMessage){
					if (strMessage=='ok') {
						swal({
						  title: "Good job!",
						  text: "Request Successfully Send",
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
});