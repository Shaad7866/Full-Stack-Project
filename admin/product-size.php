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
                                    <li class="breadcrumb-item active" aria-current="page">Product Size</li>
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
                    <div class="col-xl-6 col-lg-6 col-12 col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <b>Add New</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 input-box">
                                        <label>Size<span>*</span></label>
                                        <input type="text" name="product_size" id="product-size" class="form-control">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12 input-box">
                                        <label>Dimension<span>*</span></label>
                                        <select name="dimension" id="dimension" class="form-control">
                                            <option value="mm">mm</option>
                                            <option value="cm">cm</option>
                                            <option value="inc">inc</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-12 input-box">
                                        <input type="submit" name="add_size" id="add-size" class="form-control" value="Save & Submit">
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 col-md-6">
                        <div class="card">
                            <h5 class="card-header">Data Records</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Name</th>
                                                <th>Dimension</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query=mysqli_query($con,"SELECT * FROM product_size ORDER BY id DESC");
                                                if (mysqli_num_rows($query)>0) {
                                                    $num=1;
                                                    while ($row=mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $num; ?></td>
                                                    <td><?php echo $row['size']; ?></td>
                                                    <td><?php echo $row['dimension']; ?></td>
                                                    <td class="action">
                                                        <a href="javascript:void(0)"><span class="fa fa-edit view" onclick="editSize(<?php echo $row['id']; ?>)"></span></a>
                                                        <a href="javascript:void(0)"><span class="fa fa-trash delete" onclick="deleteSize(<?php echo $row['id']; ?>)"></span></a>
                                                    </td>
                                                </tr>
                                            <?php
                                                        $num++;
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

                <!-- Modal -->
        <div class="modal fade" id="editSizeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-table"></i> Edit Size</h5>
                  
              </div>
              <div class="modal-body">
                <div id="fetch-size"></div>
              </div>
              <div class="modal-footer">
                <button type="button" id="update-size" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

            </div>

<?php  include 'templates/footer.php'; ?>