<?php 
    include 'templets/header.php'; 
    $productsId=$_GET['productsId'];

    $productDetails=mysqli_query($con,"SELECT * FROM products WHERE id='$productsId'");
    if (mysqli_num_rows($productDetails)>0) {
        $row=mysqli_fetch_assoc($productDetails);
        $title=$row['title'];
        $size=$row['size'];
        $size_type=$row['size_type'];
        $short_description=$row['short_description'];
        $long_description=$row['long_description'];
        $product_image=$row['product_image'];
        $categoryname=$row['category'];
        $productsId=$row['product_id'];
    }
?>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3><?php echo $title; ?></h3>
                    <h3 style="text-transform: lowercase;"><?php echo $size." ".$size_type; ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- service_details_start  -->
<div class="service_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        
                        <div class="product_thumb">
                            <img class="img-fluid" src="admin/ajax/<?php echo $product_image; ?>" alt="">  
                        </div>
                        <div class="products-gallery">
                            <?php
                                $gallery=mysqli_query($con,"SELECT * FROM product_galery WHERE product_id='$productsId'");
                                if (mysqli_num_rows($gallery)>0) {
                                    while ($grow=mysqli_fetch_assoc($gallery)) {
                        ?>
                               <a href="admin/ajax/<?php echo $grow['images']; ?>" target="_blank"><img src="admin/ajax/<?php echo $grow['images']; ?>"></a>
                               <a href="abc.jpg" target="_blank"><img src="abc.jpg"></a>
                        <?php
                                    }
                                }
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-7">
                <div class="service_details_info">
                    <h3><?php echo $title; ?></h3>
                        <p><?php echo $short_description; ?></p>
                        <h5 style="text-transform: lowercase;">Size - <?php echo $size." ".$size_type; ?></h5>    
                </div>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Download Catalogue</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body"> 
                            <div class="download_brochure d-flex align-items-center justify-content-between">
                            <div class="download_left d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/svg_icon/download.svg" alt="">
                                </div>
                                <div class="download_text">
                                    <h3>Download Catalogue</h3>
                                    <p>We thank you for your interest in our products.</p>
                                </div>
                            </div>
                            <div class="download_right">
                                <?php
                                    $category=mysqli_query($con,"SELECT * FROM category WHERE category='$categoryname'");
                                    if (mysqli_num_rows($category)>0) {
                                        while ($row=mysqli_fetch_assoc($category)) {
                                ?>
                                    <a class="boxed-btn3-line" href="admin/ajax/<?php echo $row['catalouge']; ?>" target="_blank">Download</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Additional Information</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p><?php echo $long_description; ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Quick Enquiry</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col-xl-6 mt-3">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter Full Name">
                                    </div>
                                    <div class="col-xl-6 mt-3">
                                        <input type="number" id="userphone" name="userphone" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                    <div class="col-xl-12 mt-3">
                                        <textarea placeholder="Message" class="form-control" name="description"></textarea>
                                        <input type="hidden" id="product" name="product" class="form-control" value="<?php echo $title; ?>">
                                        <input type="hidden" id="product_size" name="product_size" class="form-control" value="<?php echo $size." ".$size_type; ?>">
                                        <input type="submit" id="sendenquiry" class="form-control btn-dark" value="Quick Enquiry">
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            

            <div class="col-lg-12 col-md-12">
                <div class="more-product">
                    <h1 class="mt-3 mb-3 text-center">Related Products</h1>
                    <div class="related-product owl-carousel owl-theme">
                        <?php
                            $releted_product = mysqli_query($con,"SELECT * FROM products WHERE category = '$categoryname'");
                            if (mysqli_num_rows($releted_product)>0) {
                                while ($relrow=mysqli_fetch_assoc($releted_product)) {
                    ?>
                            <div class="item">
                                <a href="products-details.php?productsId=<?php echo $relrow['id']; ?>">
                                    <img src="admin/ajax/<?php echo $relrow['product_image']; ?>">
                                    <p><?php echo $relrow['title']; ?></p>
                                    <p><?php echo $relrow['size']." ".$relrow['size_type']; ?></p>
                                </a>
                            </div>
                    <?php
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



<?php include 'templets/testimonials.php'; ?>

<?php include 'templets/applied-service-contact.php'; ?>

<?php include 'templets/footer.php'; ?>