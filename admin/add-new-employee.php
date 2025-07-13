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
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
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
                    <div class="col-lg-8">
                <div class="registration-content">
                    <div class="content-header">
                        <i class="fa fa-table"></i> &nbsp;Employee Registration Form
                    </div>
                    <div class="content-box">
                        <form method="post">
                            <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="First Name*" name="first_name" id="first_name">
                      <input type="text" class="form-control" placeholder="Last Name*" name="last_name" id="last_name">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                      </div>
                      <input type="number" class="form-control" placeholder="Phone Number*" name="phone_number" id="phone_number">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input type="email" class="form-control" placeholder="Email Address" name="email_address" id="email_address">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Password*" name="password" id="password">
                    </div>
                    
                    <div class="input-group mb-3">
                      <button type="submit" class="form-control" id="addemp_btn">Add Employee</button>
                    </div>       
                        </form>
                    </div>
                </div>
            </div>
                </div>
            </div>

<?php  include 'templates/footer.php'; ?>