<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="quick order/css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="quick order/css/style.css">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="quick order/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/order.js"></script>
    <title>Feliciano - Order </title>
    <link rel="shortcut icon" href="assets/img/2.png" type="image/x-icon">
    <style>

    </style>
</head>

<body>
<?php
    session_start();
?>

    <header id="header">
        <nav class="navbar navbar-expand-lg px-4">
         
            <a href="index.php" class="navbar-brand">
                <img src="quick order/img/1.png" alt="main icon">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
           <span class="toggler-icon">
            <i class="fas fa-bars"></i>
           </span>
           
          </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav text-capitalize mx-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">about</a>
                    </li>
                    <li class="nav-item active">
                        <a href="blog-archive.php" class="nav-link">blog</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#services" class="nav-link">services</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#order" class="nav-link">order</a>
                    </li>
                </ul>
                <div class="nav-info-items d-none d-lg-flex">
                    <!-- single info-->
                    <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
                        <span class="info-icon mx-lg-3">
                  <i class="fas fa-phone"></i>
                </span>
                        <p class="mb-0"> 0944 934 765</p>
                    </div>
                    <!-- single info-->

                    
                    <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                        <span class="cart-info__icon mr-lg-3">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                         
                    </div>
                </div>
            </div>
        </nav>
        <!-- End of nav-->
        <!-- banner-->
        <div class="container-fluid">
            <div class="row max-height justify-content-center align-items-center">

                <!-- cart -->
                <div class="cart" id="cart">
                    
            </div>
        </div>

        <!--End of banner-->
    </header>
    <!--End of header-->
    <!--About-->

    <!-- End of About-->
    <!--store section-->