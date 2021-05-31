<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feliciano | Banh Beo</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/2.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>



    <style>
        #mu-blog-banner {
            background-image: url("assets/img/blog-banner.png");
        }
        .ta {
            border-collapse: collapse;
            width: 50%;
        }

        .ta1, .ta2 {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>

<body>
        <?php
            session_start();
        ?>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
        <span>Top</span>
    </a>
    <!-- END SCROLL TOP BUTTON -->

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

            </div>
        </nav>
    </header>
    <!-- End header section -->

    <!-- Start Blog banner  -->
    <section id="mu-blog-banner">
        <div class="container">
            <div class="mu-blog-banner-area">
                <h2>Bill</h2>
                <ol class="breadcrumb">
                </ol>
            </div>
        </div>
    </section>
    <!-- End Blog banner -->

    <!-- Start Blog -->
   
    <!-- <div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img style="width:80px;height:80px;" src="assets/img/menu/avatar.jpg" alt="Product"></a>
                                            <h5>ten</h5>
                                        </td>
                                        <td class="qty">
                                            <div class="quantity">
                                                3
                                            </div>
                                        </td>
                                        <td class="price"><span>123</span></td>
                                        <td class="price"><span>$333</span></td>
                                        <td class="action"><a href="#"><i class="icon_close"></i></a></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
            <div style="position: relative;left: 25%;" class="row">
                <div class="col-md-12">
                    <table class="ta">
                        
                        <tr>
                            <th class="ta1">Date</th>
                            <th class="ta1">Price</th>
                            <th class="ta1">Status</th>
                            <th class="ta1">Detail</th>
                        </tr>
                        <?php
                            $id = $_SESSION['iduser'];
                            $conn = mysqli_connect('localhost','root','','do_an');
                            $sql = "SELECT * from hoadon where iduser = $id order by id desc";
                            $kq = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($kq)){
                                
                        ?>
                        <tr>
                            <td class="ta2"><?php echo $row['ngaymua']; ?></td>
                            <td class="ta2"><?php echo $row['tongtien']; ?></td>
                        <?php
                            if($row['status'] == 0){
                                echo '<td style="color:#e74a3b;" class="ta2">Pending</td>';
                            }
                            else if($row['status'] == 1){
                                echo '<td style="color:#f6c23e;" class="ta2">Dispatched</td>';
                            }
                            else if($row['status'] == 2){
                                echo '<td style="color:#1cc88a;" class="ta2">Completed</td>';
                            }
                            
                        ?>
                        <td class="ta2"><a href="detail.php?id=<?php echo $row['id']; ?>">See details</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table> 
                </div>
            </div>
            
   

   
    <!-- End Blog -->

    <!-- Footer -->
    <footer id="mu-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-footer-area">
                        <div class="mu-footer-social">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-youtube"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / Footer -->


    <!-- jQuery library -->
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>

    <script type="text/javascript" src="assets/js/waypoints.js"></script>

    <!-- Date Picker -->
    <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>

</body>

</html>