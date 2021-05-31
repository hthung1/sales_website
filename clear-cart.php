<?php 
$totalPriceAll = 0;
    session_start();
    unset($_SESSION['cart']);
    header('location:order.php');
?>