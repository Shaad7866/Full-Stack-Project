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
                                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
                    <div class="col-xl-5 col-lg-5 col-12 col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <b>Add New</b>
                            </div>

                        <form id="productForm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 input-box">
                                        <label>Category Name<span>*</span></label>
                                        <input type="text" name="category_name" id="category-name" class="form-control">
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-12 input-box">
                                        <label>Parent Category</label>
                                        <select id="sub-category" name="sub_category" class="form-control">
                                            <option value="none">None</option>
                                            <?php
                                                $pcat=mysqli_query($con,"SELECT * FROM category ORDER BY category");
                                                if (mysqli_num_rows($pcat)>0) {
                                                    while ($prow=mysqli_fetch_assoc($pcat)) {
                                            ?>
                                                <option value="<?php echo $prow['category']; ?>"><?php echo $prow['category']; ?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 input-box">
                                        <label>Description</label>
                                        <textarea id="description" name="description" class="form-control"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 input-box">
                                        <label>Product Image<span>*</span> <span>Size - 350 x 250(jpg,png,jpeg)</span></label>
                                        <input type="file" name="category_image" id="category-image" class="form-control" accept=".jpg,.png,.jpeg">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12 input-box">
                                        <label>Product Catalouge<span>*</span> <span>(pdf)</span></label>
                                        <input type="file" name="catalouge" id="catalouge" class="form-control" accept=".pdf">
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-12 input-box">
                                        <input type="submit" name="add_product" id="add-products" class="form-control" value="Save & Submit">
                                    </div>
                                </div>
                            </div>  

                        </form>

                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 col-12 col-md-6">
                        <div class="card">
                            <h5 class="card-header">Basic Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Catalouge</th>
                                                <th>Name</th>
                                                <th>Parent Category</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $data=mysqli_query($con,"SELECT * FROM category ORDER BY id");
                                                if (mysqli_num_rows($data)>0) {
                                                    while ($row=mysqli_fetch_assoc($data)) {
                                            ?>
                                                <tr>
                                                    <td id="category-image"><img src="ajax/<?php echo $row['images']; ?>"></td>
                                                    <td id="category-image"><a href="ajax/<?php echo $row['catalouge']; ?>" target="_blank"><img src="assets/images/pdf.png"></a></td>
                                                    <td><?php echo $row['category']; ?></td>
                                                    <td><?php echo $row['sub_category']; ?></td>
                                                    <td><?php echo substr_replace($row['description'], '......', 30) ?></td>
                                                    <td class="action">
                                                        <a href="javascript:void(0)" onclick="editCat()"><span class="fa fa-eye view"></span></a>
                                                        <a href="javascript:void(0)" onclick="deleteCat(<?php echo $row['id']; ?>)"><span class="fa fa-trash delete"></span></a>
                                                    </td>
                                                </tr>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php  include 'templates/footer.php'; ?>