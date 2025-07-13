<!------Products Category -------------->
<section id="product-category">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <h2 class="category-head" style="font-size: 28px;">PRODUCTS CATEGORY</h2>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="products-category owl-carousel owl-theme">
                    <div class="item">
                        <a href="all-category.php">
                            <div class="category-details">
                                <img src="img/category/menu.png">
                                <h5>All</h5>
                            </div>
                        </a> 
                     </div>
                    <?php
                        include 'connection.php';
                        $category=mysqli_query($con,"SELECT * FROM category WHERE sub_category='none'");
                        if (mysqli_num_rows($category)>0) {
                            while ($row=mysqli_fetch_assoc($category)) {
                    ?>
                         <div class="item">
                            <a href="category-wise-products.php?catname=<?php echo $row['category']; ?>">
                                <div class="category-details">
                                    <img src="admin/ajax/<?php echo $row['images']; ?>">
                                    <h5><?php echo $row['category']; ?></h5>
                                </div>
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
</section>

<!-----End Product Category ------------>