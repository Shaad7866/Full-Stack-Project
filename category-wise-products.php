<?php include 'templets/header.php'; ?>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3><?php echo $category_name=$_GET['catname']; ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
            <?php
                $products=mysqli_query($con,"SELECT * FROM products WHERE category='$category_name'");
                if (mysqli_num_rows($products)>0) {
                    while ($row=mysqli_fetch_assoc($products)) {
            ?>
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image']; ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50) ?></p>
                        </div>
                    </div>
                </div>
            <?php
                    }
                }
            ?>
               
            </div>
        </div>
    </div>


<?php include 'templets/testimonials.php'; ?>

<?php include 'templets/applied-service-contact.php'; ?>

<?php include 'templets/footer.php'; ?>