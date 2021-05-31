<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
        <?php
            $id =$_GET['id'];
            $stt = $_GET['status'];
            $conn = mysqli_connect('localhost','root','','do_an');
            if($stt == 0){
                $sql = "update hoadon set status='0' where id=$id";
                mysqli_query($conn,$sql);
            }
            else if($stt == 1){
                $sql = "update hoadon set status='1' where id=$id";
                mysqli_query($conn,$sql);
            }
            else if($stt == 2){
                $sql = "update hoadon set status='2' where id=$id";
                mysqli_query($conn,$sql);
            }
            echo '<script> document.location="show_order-ad.php" </script>';
            

        ?>
</body>
</html>