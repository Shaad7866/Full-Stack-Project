<?php
	include '../../connection.php';
	if (isset($_POST['catItems'])) {
		$catItems=$_POST['catItems'];

		$data=mysqli_query($con,"SELECT DISTINCT sub_category,category FROM category WHERE sub_category='$catItems'");
		if (mysqli_num_rows($data)>0) {
			echo "<option value='none'>None</option>";
			while ($row=mysqli_fetch_assoc($data)) {
?>
			<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
<?php
			}
		}
		else{
			echo "<option value='none'>None</option>";
		}
		
	}
?>