<?php include 'templets/header.php'; ?>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>All Products</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- service_area  -->
<div class="service_area">
<div class="container">
    <div class="row">
        <div class="col-xl-12 mb-5">
                <h1 id="all-products-heading">Our Products</h1>
        </div>
    <?php
        $category=mysqli_query($con,"SELECT * FROM category WHERE sub_category='none'");
        if (mysqli_num_rows($category)>0) {
            while ($row=mysqli_fetch_assoc($category)) {
    ?>
        <div class="col-md-4 col-lg-3 col-12">
            <div class="single_service">
                <div class="thumb">
                     <img src="admin/ajax/<?php echo $row['images']; ?>">
                </div>
                <div class="service_info">
                    <h3><a href="category-wise-products.php?catname=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a></h3>
                    <p><?php echo substr_replace($row['description'], '......', 50); ?></p>
                </div>
            </div>
        </div>
    <?php
            }
        }
    ?>
       
    </div>
</div>
<!--/ bradcam_area  -->

<?php include 'templets/testimonials.php'; ?>

<?php include 'templets/applied-service-contact.php'; ?>

<?php include 'templets/footer.php'; ?>