<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <script src="assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link href="style.css" rel="stylesheet">
    <title>Feliciano Sign-up</title>
    <link rel="shortcut icon" href="assets/img/2.png" type="image/x-icon">
</head>

<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $username = $_POST['username'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $pass = md5($_POST['pass']);
            if($name != ''|| $pass != ''){
                $conn = mysqli_connect("localhost","root","","do_an");
                $sql = "select * from users where username = '$name'";
                $kq = mysqli_query($conn,$sql);
                if(mysqli_num_rows($kq)<1){
                    $sql = "insert into users(username,name,phone,address,password,role) values('$username','$name','$phone','$address','$pass','0')";
                    mysqli_query($conn,$sql);
                    echo '<script>alert("Đăng ký thành công")</script>';
                }
                else{
                    echo '<script>alert("Đăng ký thất bại")</script>';
                }
                
                
            }
        }

    ?>

    <form action="" style="height:700px" method="post" class="login-form">
        <div class="d-wave">
            <section>
                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
                <div class="wave wave3"></div>
                <div class="wave wave4"></div>
                <div class="wave wave5"></div>
            </section>
        </div>
        <h1>Sign Up</h1>

        <div class="txtb">
            <input type="text" name="name" id="name" required>
            <span data-placeholder="Name"></span>
        </div>

        <div class="txtb">
            <input type="text" name="username" id="username1" required>
            <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
            <input type="password" name="pass" id="password1" required>
            <span data-placeholder="Password"></span>
        </div>
        <div class="txtb">
            <input type="text" name="address" id="address1" required>
            <span data-placeholder="Address"></span>
        </div>
        <div class="txtb">
            <input type="text" name="phone" id="phone1" required>
            <span data-placeholder="Phone"></span>
        </div>

        <input type="submit" class="logbtn" value="Sign Up" id="submit">
        <!-- <a href="login.php"></a> -->
        <!-- </input> -->
        <div class="bottom-text">
            Have an account
            <a href="login.php">Login</a>
        </div>
    </form>
    <script type="text/javascript">
        $(".txtb input").on("focus", function() {
            $(this).addClass("focus");
        });
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="assets/js/waypoints.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
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