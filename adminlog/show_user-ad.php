<?php
    include('include/head.php');
?>
<div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Danh sách người dùng</h1>

        <div class="card shadow mb-4">
            
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <tbody> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Purchased</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php 
                                                $conn = mysqli_connect('localhost','root','','do_an');
                                                $sql = "SELECT users.username,users.phone,users.address,users.role,count(hoadon.iduser) FROM hoadon INNER JOIN users ON hoadon.iduser = users.id GROUP BY hoadon.iduser";
                                                $kq = mysqli_query($conn,$sql);
                                                while($row = mysqli_fetch_assoc($kq)){
                                                    
                                            ?>
                                            <tr>
                                                <td><?php echo $row['username']?></td>
                                                <td><?php echo $row['phone']?></td>
                                                <td><?php echo $row['address']?></td>
                                                <td><?php echo $row['count(hoadon.iduser)']?></td>
                                                    
                                            <?php 
                                                }
                                            ?>
                                                
                                                        
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        
<?php
include('include/footer.php');
?>