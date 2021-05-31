<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <script src="assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link href="style.css" rel="stylesheet">
    <title>Feliciano Login</title>
    <link rel="shortcut icon" href="assets/img/2.png" type="image/x-icon">
</head>
<?php session_start();?>
<body>

    <form action="" method="post" class="login-form">
        <div class="d-wave">
            <section>
                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
                <div class="wave wave3"></div>
                <div class="wave wave4"></div>
                <div class="wave wave5"></div>
            </section>
        </div>
        <h1>Login</h1>
        

        <div class="txtb">
            <input type="text" name="name" id="username" required>
            <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
            <input type="password" name="pass" id="password" required>
            <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="logbtn" value="Login">
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name = $_POST['name'];
                $pass = md5($_POST['pass']);
                
                if($name != ''|| $pass != ''){
                    $conn = mysqli_connect("localhost","root","","do_an");
                    $sql = "select * from users where username = '$name' and password = '$pass'";
                    
                    $kq = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($kq);
                    
                    
                    if(mysqli_num_rows($kq) > 0){
                        $_SESSION['name'] = $name;
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['iduser'] = $row['id'];
                        echo '<script> document.location="index.php"</script>';
                    }else{
                        echo '<p style="color:red;text-align:center;">Tên đăng nhập hoặc mật khẩu không đúng </p>';
                    }
                    
                }
            }

        ?>
        <div class="bottom-text">
            Don't have account
            <a href="signup.php">Sign up</a>
        </div>
        <div class="bottom-text">
            Login for
            <a href="login-admin.php">Admin</a>
        </div>
        
        
        



    </form>
    
   



    <script type="text/javascript">
        $(".txtb input").on("focus", function() {
            $(this).addClass("focus");
        });
    </script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>


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