<?php
    include('include/head.php');
?>
        

    <?php

        if(isset($_POST['product_option'])){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $th = $_POST['name_product'];
                $img = $_FILES['images']['name'];
                $sl = $_POST['qty_product'];
                $dg = $_POST['price_product'];
                $mt = $_POST['mota_product'];
                $mt1 = $_POST['mota1_product'];
                $iddm = $_POST['product_option'];
                $conn = mysqli_connect("localhost","root","","do_an");
                $sql = "insert into hanghoa(tenhang,images,soluong,dongia,mota,mota1,iddanhmuc) values('$th','$img','$sl','$dg','$mt','$mt1','$iddm')";
                mysqli_query($conn,$sql);   
            }
            
        }
    ?>




        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Thêm thương  sản phẩm</h1>
            
            <div class="position-center">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name_product"
                            placeholder="Tên sản phẩm">
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh sản phẩm</label>
                        <input class="form-control" type="file" name="images">
                    </div>
                    

                    <div class="form-group">
                        <label>Số lượng</label>
                        <input type="text" class="form-control" name="qty_product"
                            placeholder="Số lượng">
                    </div>

                    <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input type="text" class="form-control" name="price_product"
                            placeholder="Giá sản phẩm">
                    </div>

                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea style="resize: none;" rows="8" class="form-control" name="mota_product" placeholder="Mô tả sản phẩm">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội dung sản phẩm</label>
                        <textarea style="resize: none;" rows="8" class="form-control" name="mota1_product" placeholder="Nội dung sản phẩm">
                        </textarea>
                    </div>

                    <div style="float: b;" class="form-group">
                        <label>Danh mục sản phẩm</label>
                        <select name="product_option" id="option_product" class="form-control input-sm m-bot15">
                        <?php
                            $conn = mysqli_connect("localhost","root","","do_an");
                            $sql = "SELECT * from danhmuc";
                            $kq = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($kq)){
                                echo '<option value="'.$row['id'].'">'.$row['tendanhmuc'].'</option>';
                            }
                        ?>
                        </select>
                    </div>
                    

                    <button type="submit" name="submit_product" class="btn btn-info">Thêm sản phẩm</button>
                </form>
            </div>

        </div>

<?php
    include('include/footer.php');
?>