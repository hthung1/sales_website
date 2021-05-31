<div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên người đặt</th>
                        <th>Tổng giá tiền</th>
                        <th>Số điện thoại</th>
                        <th>Ngày mua</th>
                        <th>Chi tiết</th>
                        <th>Tình trạng</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                        $conn = mysqli_connect('localhost','root','','do_an');
                        if($_GET['status'] == 'All'){
                            $sql = "SELECT hoadon.id,tongtien,status,ngaymua,name,phone from hoadon INNER JOIN users on  hoadon.iduser = users.id order by hoadon.id desc";
                            $kq = mysqli_query($conn,$sql);
                        }else{
                            if($_GET['status'] == 'Pending'){
                                $stt = 0;
                            }
                            else if($_GET['status'] == 'Dispatched'){
                                $stt = 1;
                            }
                            else if($_GET['status'] == 'Completed'){
                                $stt = 2;
                            }
                            $sql = "SELECT hoadon.id,tongtien,status,ngaymua,name,phone from hoadon INNER JOIN users on  hoadon.iduser = users.id WHERE hoadon.status = $stt order by hoadon.id desc";
                            $kq = mysqli_query($conn,$sql);
                            
                        }
                            
                        
                        
                        while($row = mysqli_fetch_array($kq)){
                            $id = $row['id'];
                    ?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['tongtien']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td><?php echo $row['ngaymua']?></td>
                        <td><a style="cursor: pointer;color: #4e73df;" onclick="show_detail(<?php echo $row['id']?>)">Chi Tiết</a></td>
                        <td>
                    <?php
                        if($row['status'] == 0){
                            echo '<a style="width:107px" class="btn btn-outline-danger" href="status.php?id='.$id.'&status=1">Pending</a>';
                        }
                        else if($row['status'] == 1){
                            echo '<a class="btn btn-outline-warning" href="status.php?id='.$id.'&status=2">Dispatched</a>';
                            
                        }
                        else{
                            echo '<a style="width:108px;" class="btn btn-outline-success" href="status.php?id='.$id.'&status=0">Completed</a>';
                        }
                        
                    ?>
                        </td>
                            
                    <?php 
                        }
                    ?>
                        
                                
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>