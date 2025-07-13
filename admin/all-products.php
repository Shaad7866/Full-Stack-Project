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
                                    <li class="breadcrumb-item active" aria-current="page">All Products</li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Basic Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Size</th>
                                                <th>Description</th>
                                                <!-- <th>Featured</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $data=mysqli_query($con,"SELECT * FROM products ORDER BY category DESC");
                                                if (mysqli_num_rows($data)>0) {
                                                    $num=1;
                                                    while ($row=mysqli_fetch_assoc($data)) {
                                            ?>
                                                <tr>
                                                    <td id="category-image"><img src="ajax/<?php echo $row['product_image']; ?>" height="40px" width="auto"></td>
                                                    <td><?php echo $row['title']; ?></td>
                                                    <td><?php echo $row['category']; ?></td>
                                                    <td><?php echo $row['size']." ".$row['size_type']; ?></td>
                                                    <td><?php echo substr_replace($row['short_description'], '......', 30) ?></td>
                                                    <!-- <td>
                                                        <span class="credit" data-toggle="tooltip" data-placement="bottom" title="Credit Left - "><a href="#"><i class="fas fa-star"></i></a></span>
                                                    </td> -->
                                                    <td class="action">
                                                        <a href="javascript:void(0)"><span class="fa fa-eye view"></span></a>
                                                        <a href="javascript:void(0)" onclick="deleteproduct(<?php echo $row['id']; ?>)"><span class="fa fa-trash delete"></span></a>
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

<?php  include 'templates/footer.php'; ?>