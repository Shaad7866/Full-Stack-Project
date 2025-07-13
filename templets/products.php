<!-- service_area  -->
<div class="service_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center mb-5"><h1 id="product-head">OUR PRODUCTS</h1></div>
         <!-------Kitchen Series ------------->   
        <div class="col-md-12 col-lg-12"><h2>KITCHEN SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='Kitchen Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=Kitchen Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>
        <!------------Elevation Series---------------->
        <div class="col-md-12 col-lg-12 mt-5"><h2>ELEVATION SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='Elevation Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=Elevation Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>

         <!------------PGVT Series---------------->
        <div class="col-md-12 col-lg-12 mt-5"><h2>3D PGVT SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='PGVT Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=PGVT Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>

        <!------------BATHROOM Series---------------->
        <div class="col-md-12 col-lg-12 mt-5"><h2>BATHROOM SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='Bathroom Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                            
                        </div>
                        <div class="text-center"><h5>Size - <?php echo $row['size']." ".$row['size_type']; ?></h5></div>
                         <div class="text-center mt-3"><a href="products-details.php?productsId=<?php echo $row['id']; ?>" class="bg-dark text-white p-2">View Details</a></div>
                    </div>
                   
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=Bathroom Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>

        <!------------Nano Series---------------->
        <div class="col-md-12 col-lg-12 mt-5"><h2>NANO SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='Nano Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=Nano Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>

        <!------------Double Charge Series---------------->
        <div class="col-md-12 col-lg-12 mt-5"><h2>DOUBLE CHARGE SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='Double Charge Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=Double Charge Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>


        <!------------Wooden Cat Series---------------->
        <div class="col-md-12 col-lg-12 mt-5"><h2>WOODEN CAT SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='Wooden Cat Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=Wooden Cat Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>


        <!------------Procelain Series---------------->
        <div class="col-md-12 col-lg-12 mt-5"><h2>PROCELAIN SERIES</h2></div>
        <?php
            $productDetails=mysqli_query($con,"SELECT * FROM products WHERE category='Porcelain Series' ORDER BY id DESC LIMIT 4");
            if (mysqli_num_rows($productDetails)>0) {
                while ($row=mysqli_fetch_assoc($productDetails)) {
        ?>
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="admin/ajax/<?php echo $row['product_image'] ?>" alt="">
                        </div>
                        <div class="service_info">
                            <h3><a href="products-details.php?productsId=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></h3>
                            <p><?php echo substr_replace($row['short_description'], '......', 50); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                }
        ?>
            <div class="col-md-12 col-lg-12 col-12">
                <div class="input_field">
                    <a href="category-wise-products.php?catname=Porcelain Series">
                        <button class="boxed-btn3-line" type="submit">View All</button>
                    </a>
                    
                </div>
            </div>
        <?php
                
            }
          
        ?>



            
        </div>
        <!-------- End Row ----------->
    </div>
</div>
<!--/ service_area  -->