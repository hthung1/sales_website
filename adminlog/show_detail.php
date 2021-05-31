
<div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên Hàng Hóa</th>
                        <th>Hình Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Giá Tiền</th>
                        <th>Tổng Giá Tiền</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                        $conn = mysqli_connect('localhost','root','','do_an');
                        $id = $_GET['id'];
                        $sql = "SELECT dathang.idhanghoa,dathang.soluong,dathang.dongia,dathang.idhoadon,hoadon.id,hanghoa.tenhang,hanghoa.images 
                        FROM dathang INNER JOIN hoadon on hoadon.id = dathang.idhoadon INNER JOIN hanghoa on hanghoa.id = dathang.idhanghoa where hoadon.id = $id";
                        $kq = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($kq)){
                    ?>
                    <tr>
                        <td><?php echo $row['tenhang']?></td>
                        <td><img style="width:100px;height:100px;" src="../assets/img/menu/<?php echo $row['images']; ?>"></td>
                        <td><?php echo $row['soluong']?></td>
                        <td><?php echo $row['dongia']?></td>
                        <td><?php echo $row['dongia']*$row['soluong']?></td>
                    <?php 
                        }
                    ?>
                        
                                
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>