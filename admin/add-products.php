<?php include 'templates/header.php'; ?>

<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Dashboard </h2>
                        
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-12 col-md-10">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        <b>Add New Product</b>
                    </div>
                    <form method="post" id="addProductForm">    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 input-box">
                                    <label>Product Name<span>*</span></label>
                                    <input type="text" name="product_name" id="product-name" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 input-box">
                                    <label>Category<span>*</span></label>
                                    <select id="category" name="category" class="form-control" onchange="pcategory(this)">
                                        <option value="none">Select Category</option>
                                        <?php
                                            $category=mysqli_query($con,"SELECT * FROM category WHERE sub_category='none'");
                                            if (mysqli_num_rows($category)>0) {
                                                while ($row=mysqli_fetch_assoc($category)) {
                                        ?>
                                             <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                        <?php
                                                }
                                            }

                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 input-box">
                                    <label>Parent Category<span>*</span></label>
                                    <select id="sub-category" name="sub_category" class="form-control">
                                        <option value="none">Select parent Category</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 input-box">
                                    <label>Size<span>*</span></label>
                                    <select id="size" name="size" class="form-control">
                                        <option value="none">Select Size</option>
                                        <?php
                                            $psize=mysqli_query($con,"SELECT DISTINCT size FROM product_size");
                                            if (mysqli_num_rows($psize)>0) {
                                                while ($srow=mysqli_fetch_assoc($psize)) {
                                        ?>
                                             <option value="<?php echo $srow['size']; ?>"><?php echo $srow['size']; ?></option>
                                        <?php
                                                }
                                            }

                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 input-box">
                                    <label>Size Type<span>*</span></label>
                                    <select id="size_type" name="size_type" class="form-control">
                                        <option value="none">Select Size Type</option>
                                        <option value="mm">mm</option>
                                        <option value="cm">cm</option>
                                        <option value="inc">inc</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 input-box">
                                    <label>Product Description(Sort) <span>max- 250 words</span></label>
                                    <textarea id="short-desc" name="sort_desc" class="form-control" maxlength="250"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 input-box">
                                    <label>Additional Information</label>
                                    <textarea id="long-desc" name="long_desc" class="form-control"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 input-box">
                                    <label>Product Image<span>*</span> <span>Size - 350 x 250</span></label>
                                    <input type="file" name="product_image" id="product-image" class="form-control" accept=".jpg,.png,.jpeg">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 input-box">
                                    <label>Product Gallery <span>Size - 350 x 250</span></label>
                                    <input type="file" name="product_gallery[]" id="product-gallery" class="form-control" accept=".jpg,.png" multiple>
                                </div>
                               <!--  <div class="col-lg-12 col-md-12 col-12">
                                    <div id="gallery-preview">
                                        
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-12 input-box">
                                    <input type="submit" name="add_product" id="add-products" class="form-control" value="Save & Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                        
                    </div>
                </div>
                </div>
            </div>

<?php  include 'templates/footer.php'; ?>