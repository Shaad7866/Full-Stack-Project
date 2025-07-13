<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>REAL TILES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/tiles-logo2.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styled2.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style type="text/css">
        @media(max-width: 552px){
            #product-head{
                font-size: 32px;
            }
            #slider-para{
                display: none;
            }
            .category-head{
                font-size: 28px;
            }
        }
        #all-products-heading{
            font-size: 42px;
            text-align: center;
        }
        .single_service{
            background: #FFF;
        }
        .service_thumb img{
            width: 100%;
            height: auto;
        }
        .more-products-details a{
            display: grid;
            padding: 10px;
            border: 1px solid #6c757d;
        }
        .more-products-details a:hover{
            background: #fd7e14;
            color: #FFF;
        }
        .panel-heading{
            background: #000;
            padding: 10px;
            margin-bottom: 10px;
        }
        .panel-heading .panel-title a{
            color: #FFFF;
        }
        .related-product .item {
            border: 1px solid #EAEAEA;
        }
        .related-product .item img{
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .related-product .item p{
            margin: 0;
            font-weight: 600;
            text-align: center;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/tiles-logo.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="mailto:realtiles80@gmail.com"> <i class="fa fa-envelope"></i> realtiles80@gmail.com</a></li>
                                        <li><a href="tel:+917070786143"> <i class="fa fa-phone"></i> +91-7070786143</a></li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" href="#Estimate_area">Get Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/tiles-logo2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.php">home</a></li>
                                            <li><a href="about.php">about</a></li>
                                            <li><a href="#">Products <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <?php
                                                        include 'connection.php';
                                                        $category=mysqli_query($con,"SELECT * FROM category WHERE sub_category='none'");
                                                        if (mysqli_num_rows($category)>0) {
                                                            while ($row=mysqli_fetch_assoc($category)) {
                                                    ?>
                                                         <li><a href="category-wise-products.php?catname=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a></li>
                                                    <?php
                                                            }
                                                        }

                                                    ?>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <!-- <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
