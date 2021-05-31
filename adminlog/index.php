<?php
    include('include/head.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
                
            </div>

            <!-- Content Row -->
            
            <div class="row">
                <?php 
                    $total = 0;
                    $conn = mysqli_connect('localhost','root','','do_an');
                    $sql = "select * from hoadon";
                    $kq = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($kq)){
                        $total +=$row['tongtien'];
                    }
                ?>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh Thu</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $total?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    $conn = mysqli_connect('localhost','root','','do_an');
                    $sql = "select * from hanghoa";
                    $product = mysqli_num_rows(mysqli_query($conn,$sql));
                ?>
                <!-- Pending Requests Card Example -->
                <div style="cursor: pointer" id="sp" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sản phẩm </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $product?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    $conn = mysqli_connect('localhost','root','','do_an');
                    $sql = "select * from users where role = 0";
                    $user = mysqli_num_rows(mysqli_query($conn,$sql));
                ?>
            <div style="cursor: pointer;" id="user" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Người dùng</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php 
                    $conn = mysqli_connect('localhost','root','','do_an');
                    $sql = "select * from hoadon where status = 0";
                    $stt = mysqli_num_rows(mysqli_query($conn,$sql));
                ?>
                <!-- Pending Requests Card Example -->
                <div style="cursor: pointer;" id="stt" class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Yêu cầu cần xử lý</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $stt?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bell fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
            
            <script>
                $('#stt').on('click',function(){
                    document.location="show_order-ad.php";
                })
                $('#sp').on('click',function(){
                    document.location="show_product-ad.php";
                })
                $('#user').on('click',function(){
                    document.location="show_user-ad.php";
                })
            </script>



    <h1 class="h3 mb-2 text-gray-800">Charts</h1>





    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">

            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue by Month</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>

        </div>


        <?php 
            $conn = mysqli_connect('localhost','root','','do_an');
            // "Select Year(ngay),month(ngay),day(ngay), Sum(tongtien)  From hoadon Group by Year(ngay),day(ngay),month(ngay)";
            $sql = "Select year(ngay),month(ngay), Sum(tongtien)  From hoadon Group by year(ngay),month(ngay) ORDER by Year(ngay) desc , month(ngay) desc";
            $kq = mysqli_query($conn,$sql);
            $total = [];
            $year = [];
            $a =0;
            while($row = mysqli_fetch_assoc($kq)){
                $total[] = (float)$row['Sum(tongtien)'];
                $year[] = $row['month(ngay)'].'-'.$row['year(ngay)'];
                $a++;
                if($a == 12){
                    break;
                }
     
            }
            
            // echo json_encode($total);
            // echo json_encode(array_reverse($year));
        ?>

        
            
            <script type="text/javascript">
                var year = <?php echo json_encode(array_reverse($year)); ?>;
                var total = <?php echo json_encode(array_reverse($total)); ?>;
            </script>

    </div>




<?php
    include('include/footer.php');
?>


