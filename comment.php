<?php
session_start();
    $conn = mysqli_connect("localhost","root","","do_an");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaygio = date("l. d, m, Y").' at '.date("H:i"); 
    $iduser = $_SESSION['iduser'];
    $name = $_SESSION['name'];
    $cmt = $_GET['comment_form'];
    $id = $_GET['id'];
    $sql = "insert into binhluan(name,comment,ngaygio,iduser,idhanghoa) values('$name','$cmt','$ngaygio',$iduser,$id)";
    mysqli_query($conn,$sql);
?>