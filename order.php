<?php 
    include('include/head-oder.php');
?>

    <section id="store " class="store py-5 ">
        <div class="container ">
            <!--Section Title-->
            <div class="row ">
                <div class="col-10 mx-auto col-sm-6 text-center ">
                    <h1 class="text-capitalize ">our <strong class="banner-title ">store</strong></h1>
                </div>
            </div>
            <!--end section title-->
            <!--fitler buttons-->
            <div class="row ">
                <div class="col-lg-8 mx-auto d-flex justify-content-around sortBtn flex-wrap">
                    <a class="btn btn-black text-uppercase fliter-btn m-2" onclick="product_order(0)">all</a>
                    <?php
                        $conn = mysqli_connect("localhost","root","","do_an");
                        $sql = "select * from danhmuc";
                        $kq = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($kq)){
                            echo '<a class="btn btn-black text-uppercase fliter-btn m-2 active11" onclick="product_order('.$row['id'].')" ">'.$row['tendanhmuc'].'</a>';
                        }
                    ?>
                </div>
            </div>
            <!--End of filter buttons-->
            <!--Search box-->
            <div class="row">
                <div class="col-10 mx-auto col-md-4 ">
                    <form>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text search-box " id="search-icon ">
                                    <i class="fas fa-search "></i>
                                </span>
                            </div>
                            
                            <input type="text" class="form-control " placeholder="item... " id="search-item">
                        </div>
                        <div class="col-md-3" style="position: relative; top:-60px;right:200px">
                            <input type="text" value="0" class="form-control" placeholder="Min" id="min">to
                            <input type="text" value="10" class="form-control" placeholder="Max" id="max">
                        </div>
                            
                    </form>
                </div>
                <div class="col-md-2">
                <select class="form-control" id="limit">
                    <option value="3">3</option>
                    <option value="6">6</option>
                    <option value="9">9</option>
                </select>
            </div>
            </div>
            
            <!--End of Search box-->
            <!--store items--><p style="position: relative;top:-150px;width:100px">Search Price:</p>
            <div class="row store-items " id="product-order">
    

    <!-- jquery -->
    <script src="quick order/js/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="quick order/js/bootstrap.bundle.min.js"></script>
    <!-- script js -->
    <script src="quick order/js/app.js"></script>
</body>

</html>