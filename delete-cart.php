<?php 
$totalPriceAll = 0;
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        unset($_SESSION['cart'][$id]);
    }
?>

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
    while($row = mysqli_fetch_array($kq)){
        $id1 = $row['id'];
        $totalPrice = $row['dongia'] * $_SESSION['cart'][$row['id']];
        echo '<div class="cart-item d-flex justify-content-between text-capitalize my-3">
                <img style="width:50px;height:50px;" src="assets/img/menu/'.$row['images'].'" class="img-fluid rounded-circle" id="item-img" alt="">
                <div class="item-text">
                    <p id="cart-item-title" class="font-weight-bold mb-0">
                        '.$row['tenhang'].'
                    </p>
                    <span>$</span>
                    <span id="cart-item-price" class="cart-item-price mb-0">'.$row['dongia'].'</span>
                </div>
                ('.$_SESSION['cart'][$id].')
                <a href="#" id="cart-item-remove" onclick="delete_cart('.$row['id'].')" class="cart-item-remove">
                    <i class="fas fa-trash"></i>
                </a>
            </div>';
        $totalPriceAll += $totalPrice;
    }
$_SESSION['totalprice']=$totalPriceAll;



?>
<!--end of cart item-->
<!--total-->
<div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
    <h5>total</h5>
    <h5>$<strong id="cart-total" class="font-weight-bold"><?php echo $totalPriceAll?></strong></h5>
</div>
<!--end of total-->
<!--cart button-->
<div class="cart-buttons-container mt-3 d-flex justify-content-between">
    <a onclick="clear_cart()" id="clear-cart" class="btn btn-black text-uppercase">clear cart</a>
    <a href="#" id="clear-cart" class="btn btn-pink text-uppercase">checkout</a>
</div>

<?php
    }
?>