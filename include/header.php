<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feliciano - DaNangFood</title>

    <!--Favicon-->
    <link rel="shortcut icon" href="assets/img/2.png" type="image/x-icon">

    <!-- Font awesome-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--Bootstrap-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!--Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!--Date Picker-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
    <!--Fancybox slider-->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen">
    <!--Them color-->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Main style sheet-->
    <link href="style.css" rel="stylesheet">


    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>


</head>

<body>
<?php session_start();?>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
        <span>Top</span>
    </a>
    <!-- END SCROLL TOP     BUTTON -->

    <!-- Start header section -->
    <header id="mu-header">
        <nav class="navbar navbar-default mu-main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <!-- LOGO -->
                    <a class="navbar-brand" href="index.php"><img src="assets/img/1.png" alt="Logo img">

                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                        <li><a href="#mu-slider">HOME</a></li>
                        <li><a href="#mu-about-us">ABOUT US</a></li>
                        <li><a href="#mu-restaurant-menu">MENU</a></li>
                        <li><a href="order.php">SHOP</a></li>
                        <li><a href="#mu-latest-news">BLOG</a></li>
                        <li><a href="#mu-contact">CONTACT</a></li>
                        

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                
                                <?php 
                                    if(isset($_SESSION['name'])){
                                        echo $_SESSION['name'];
                                    }
                                    else{
                                        echo 'Register';
                                    }
                                ?> 
                                
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <?php 
                                    if(isset($_SESSION['name'])){
                                        if($_SESSION['role'] == 1){
                                            echo '<li><a href="adminlog/index.php">Dashboard</a></li>';
                                        }
                                        else if($_SESSION['role'] == 0){
                                            echo '<li><a href="bill.php">Bill</a></li>';
                                        }
                                        echo'<li><a href="logout.php">LOGOUT</a></li>';
                                    }
                                    else{
                                        echo '<li><a href="login.php">LOGIN</a></li>';
                                    }
                                ?> 
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    <!-- End header section -->


    <!-- Start slider  -->
    <section id="mu-slider">
        <div class="mu-slider-area">
            <!-- Top slider -->
            <div class="mu-top-slider">
                <!-- Top slider single slide -->
                <div class="mu-top-slider-single">
                    <img src="assets/img/slider/1.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="mu-top-slider-content">
                        <span class="mu-slider-small-title">Feliciano</span>
                        <h1 class="mu-slider-title mb-4">ĐẶC SẢN MIỀN TRUNG</h1>
                        <p></p>
                        <a href="#" class="mu-readmore-btn">READ MORE</a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="mu-top-slider-single">
                    <img src="assets/img/slider/2.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="mu-top-slider-content">
                        <span class="mu-slider-small-title">Feliciano </span>
                        <h1 class="mu-slider-title mb-4">MÓN ĂN NGON</h1>
                        <p></p>
                        <a href="#" class="mu-readmore-btn">READ MORE</a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->

                <!-- Top slider single slide -->
                <div class="mu-top-slider-single">
                    <img src="assets/img/slider/3.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="mu-top-slider-content">
                        <span class="mu-slider-small-title">Feliciano</span>
                        <h1 class="mu-slider-title mb-4">MÓN ĂN RẺ</h1>
                        <p></p>
                        <a href="#" class="mu-readmore-btn">READ MORE</a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
            </div>
        </div>
    </section>
    <!-- End slider  -->

    <!-- Start About us -->
    <section id="mu-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-us-area">
                        <div class="mu-title">
                            <span class="mu-subtitle">Discover</span>
                            <h2>ABOUT US</h2>
                            <i class="fa fa-spoon"></i>
                            <span class="mu-title-bar"></span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-about-us-left">
                                    <p>Feliciano ban đầu được tao ra với mục đích kinh doanh bán các đồ ăn vặt , nhưng vì mục đích lớn lao hơn , thế nên website được tạo ra dùng để quảng bá các món ăn ngon của miền Trung tới mọi người , với các món nổi bật
                                        như :</p>
                                    <ul>
                                        <li>Mỳ Quảng</li>
                                        <li>Bánh Xèo</li>
                                        <li>Hủ Tiếu</li>
                                        <li>Phở </li>
                                        <li>Bánh Căn</li>
                                        <li>Bánh Bèo</li>
                                    </ul>
                                    <p>Và còn có nhiều món ăn khác nữa.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-about-us-right">
                                    <ul class="mu-abtus-slider">
                                        <li><img src="assets/img/about-us/abus-1.png" alt="img"></li>
                                        <li><img src="assets/img/about-us/abus-4.png" alt="img"></li>
                                        <li><img src="assets/img/about-us/abus-3.png" alt="img"></li>
                                        <li><img src="assets/img/about-us/abus-5.png" alt="img"></li>
                                        <li><img src="assets/img/about-us/abus-6.png" alt="img"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About us -->

    <!-- Start  Menu -->