<?php
  include '../../connection.php';
 

  if (isset($_POST['product_size']) && isset($_POST['dimension'])) {
    $product_size=$_POST['product_size'];
    $dimension=$_POST['dimension'];
    $check=mysqli_query($con,"SELECT * FROM product_size WHERE size='$product_size'");
    if (mysqli_num_rows($check)>0) {
      echo "Data Already Exist";
    }
    else{
      if (mysqli_query($con,"INSERT INTO product_size(size,dimension) VALUES('$product_size','$dimension')")) {
        echo "ok";
      }
      else{
        echo "Something Wrong";
      }
    }
  }

 

  if (isset($_POST['editSize'])) {
    
    $sizedata=$_POST['editSize'];
    $sizedata=mysqli_query($con,"SELECT * FROM product_size WHERE id='$sizedata'");
    if (mysqli_num_rows($sizedata)>0) {
      while ($drow=mysqli_fetch_assoc($sizedata)) {
?>
    <input type="text" id="usize" class="form-control" value="<?php echo $drow['size']; ?>">
    <input type="text" id="udimension" class="form-control mt-3" value="<?php echo $drow['dimension']; ?>">
    <input type="text" id="sizeId" class="form-control mt-3" value="<?php echo $drow['id']; ?>">
<?php
      }
    }
  }


  if (isset($_POST['usize']) && isset($_POST['udimension'])) {
    $uproduct_size=$_POST['usize'];
    $udimension=$_POST['udimension'];
    $sizeId=$_POST['sizeId'];
    $check=mysqli_query($con,"SELECT * FROM product_size WHERE size='$uproduct_size'");
    if (mysqli_num_rows($check)>0) {
      echo "Data Already Exist";
    }
    else{
      if (mysqli_query($con,"UPDATE product_size SET size='$uproduct_size',dimension='$udimension' WHERE id='$sizeId'")) {
        echo "ok";
      }
      else{
        echo "Something Wrong";
      }
    }
  }

  if (isset($_POST['deleteSize'])) {
    $deleteSize=$_POST['deleteSize'];
    if (mysqli_query($con,"DELETE FROM product_size WHERE id='$deleteSize'")) {
      echo "ok";
    }
    else{
      echo "Something Wrong";
    }
  }


?>