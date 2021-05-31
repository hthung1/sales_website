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
    </style>
</head>

<body>
<?php 
session_start();
$totalPriceAll = 0; 
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
                <h2>Payment Procedures</h2>
                <ol class="breadcrumb">
                </ol>
            </div>
        </div>
    </section>
    <!-- End Blog banner -->

    <!-- Start Blog -->
   
    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <?php 

                            if(isset($_SESSION['cart'])){
                                if(isset($_POST['num'])){
                                    foreach($_POST['num'] as $id=>$num){
                                        if($num == 0 ){
                                            unset($_SESSION['cart'][$id]);
                                        }else if($num > 0){
                                            $_SESSION['cart'][$id]= $num;
                                        }
                                    } 
                                }
                                $arrId = array(); 
                                foreach($_SESSION['cart'] as $id=>$number){
                                    $arrId[] = $id;
                                }
                                $strId = implode(',',$arrId);
                                $conn = mysqli_connect("localhost","root","","do_an");
                                $sql = "select * from hanghoa where id in($strId)";
                                $kq = mysqli_query($conn,$sql);
                        ?>
                        
                    <form id="cart" method="post">

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                
                                while($row = mysqli_fetch_array($kq)){
                                    $id1 = $row['id'];
                                    $totalPrice = $row['dongia'] * $_SESSION['cart'][$row['id']];
                                    $total1 = $_SESSION['cart'][$id1] *$row['dongia'];
                                    echo '<tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img style="width:80px;height:80px;" src="assets/img/menu/'.$row['images'].'" alt="Product"></a>
                                            <h5>'.$row['tenhang'].'</h5>
                                        </td>
                                        <td class="qty">
                                            <div class="quantity">
                                                <input type="number" class="qty-text"  step="1" min="1" max="99" name="num['.$id1.']" value="'.$_SESSION['cart'][$id1].'">
                                            </div>
                                        </td>
                                        <td class="price"><span>$'.$row['dongia'].'</span></td>
                                        <td class="price"><span>$'.$total1.'</span></td>
                                        <td class="action"><a href="#"><i class="icon_close"></i></a></td>
                                    </tr>';
                                    $totalPriceAll += $totalPrice;
                                }
                                    $_SESSION['totalprice']=$totalPriceAll;
                                
                            ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="subtotal d-flex justify-content-between">
                <h5>Subtotal</h5>
                <h5>$ <?php echo $totalPriceAll?></h5>
            </div>
                    <button class="mu-readmore-btn" <?php echo 'onclick="document.getElementById('."'cart'".').submit();"';?> style="padding: 15px 35px;width:160px;border:2px #c1a35f;" type="submit">Update</button>
                    <button class="mu-readmore-btn" name="checkout" style="padding: 15px 35px;width:160px;border:2px #c1a35f;" type="submit">Pay</button>
                </form>
                
                <?php
    }
?>

        </div>
    </div>

    <?php
    if(isset($_POST['checkout'])){
        function price($id,$numof){
        $conn = mysqli_connect("localhost", "root", "", "do_an");
        $sql="SELECT * FROM hanghoa WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $sum=$row['dongia']*$numof;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaygio = date("l. d, m, Y").' at '.date("H:i");
    $ngay = date("Y-m-d");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn = mysqli_connect("localhost", "root", "", "do_an");
        $insertorder = "INSERT INTO hoadon(tongtien,ngaymua,iduser,status,ngay) VALUES($totalPriceAll,'$ngaygio',$_SESSION[iduser],0,'$ngay')";
        mysqli_query($conn,$insertorder);
        $orderid = $conn->insert_id;
        $insertorderdetail = "";
        
        foreach ($_SESSION['cart'] as $id=>$num) {
            if($id!=0){
                $sql1 = "select soluong from hanghoa where id = $id";
                $row = mysqli_fetch_assoc(mysqli_query($conn,$sql1));
                $total = $row['soluong']-(int)$_SESSION['cart'][$id];
                if($total >= 0){
                    $insertorderdetail .= "($id,".(int)$_SESSION['cart'][$id].",".price($id,(int)$_SESSION['cart'][$id]).",".$_SESSION['iduser'].",$orderid)";
                    $sl = 'update hanghoa set soluong = '.$total.' where id = '.$id; 
                    if ($id != count($_SESSION['cart']) - 1) {
                        $insertorderdetail .= ",";
                    }
                    mysqli_query($conn,$sl);
                }
                
            }
        }
        
        $detailod = "INSERT INTO dathang(idhanghoa,soluong,dongia,iduser,idhoadon) VALUES ".rtrim($insertorderdetail,",").";";
        // $sl1 = rtrim($sl);
        mysqli_query($conn,$detailod);
        // echo $insertorder;
        // echo rtrim($insertorderdetail,",");
        unset($_SESSION['cart']);
        echo '<script> document.location="pay-success.php"</script>';
    }
    }
    
?>
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