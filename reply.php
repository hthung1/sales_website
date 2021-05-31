<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","do_an");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaygio = date("l. d, m, Y").' at '.date("H:i"); 
    $iduser = $_SESSION['iduser'];
    $name = $_SESSION['name'];
    $cmt = $_GET['reply_form'];
    $id = $_GET['id_cmt'];
    $sql = "insert into reply(name,comment,ngaygio,iduser,idbinhluan) values('$name','$cmt','$ngaygio',$iduser,$id)";
    mysqli_query($conn,$sql);
?>