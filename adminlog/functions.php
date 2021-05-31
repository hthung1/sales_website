<?php
    //Categories
    function insert_categories(){
        $conn = mysqli_connect("localhost","root","","do_an");
        $name = $_POST['tendanhmuc'];
        $sql = "insert into danhmuc(tendanhmuc) values('$name')";
        mysqli_query($conn,$sql);
    }
    function view_categories(){
        $conn = mysqli_connect("localhost","root","","do_an");
        $sql = "select * from danhmuc";
        $kq = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($kq)){
            echo '<tr>
            <td>'.$row['tendanhmuc'].'</td>
            <td> <a href="#" class="active"
                ui-toggle-class="">
                <i class="fas fa-edit" onclick="edit_categories('.$row['id'].')" data-toggle="modal" data-target="#edit"></i>
                </a>
            </td>
            <td> 
                
            <a 
                href="#" class="active"
                ui-toggle-class="">
                <i class="fa fa-times text-danger text" onclick="delete_categories('.$row['id'].')" data-toggle="modal" data-target="#delete"></i>
            </a>
        </td>
           
            
        </tr>';
        }
    }
    function view_edit_categories(){
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","do_an");
        $sql = "select * from danhmuc where id = $id";
        $kq = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($kq)){
            echo '<input type="text" class="form-control" id="name_categories" value="'.$row['tendanhmuc'].'">';
        }
    }
    function edit_categories(){
        $tdm = $_GET['tendanhmuc'];
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","do_an");
        $sql = "update danhmuc set tendanhmuc = '$tdm' WHERE id = $id";
        mysqli_query($conn,$sql);
    }
    function view_delete_categories(){
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","do_an");
        $sql = "select * from danhmuc where id = $id";
        $kq = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($kq)){
            echo 'Bạn muốn xóa danh mục '.$row['tendanhmuc']."?";
        }
    }
    function delete_categories(){
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","do_an");
        $sql = "delete from danhmuc WHERE id = $id";
        mysqli_query($conn,$sql);
    }


    // Product
    function view_product(){
        $conn = mysqli_connect("localhost","root","","do_an");
        $sql = "SELECT hanghoa.id,tendanhmuc,tenhang,soluong,dongia,images FROM danhmuc INNER JOIN hanghoa on danhmuc.id = hanghoa.iddanhmuc";
        $kq = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($kq)){
            echo '<tr>
                    <td>'.$row['tenhang'].'</td>
                    <td>'.$row['dongia'].' $</td>
                    <td><img style="margin:0px;padding:0px; width:70px;height:50px;" src="../assets/img/menu/'.$row['images'].'"></td>
                    <td>'.$row['soluong'].'</td>
                    <td>'.$row['tendanhmuc'].'</td>
                    <td> 
                        <a href="#" class="active">
                        <i class="fas fa-edit" data-toggle="modal" data-target="#edit_product1" onclick="edit_product('.$row['id'].')"></i>
                        </a>
                    </td>    
                    <td>
                        <a href="#" class="active">
                            <i class="fa fa-times text-danger text" data-toggle="modal" data-target="#delete_product1" onclick="delete_product('.$row['id'].')"></i>
                        </a>
                    </td>
                
                    
                </tr>';
        }
    }
    function view_edit_product(){
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","do_an");
        $sql = "select * from hanghoa where id = $id";
        $kq = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($kq)){
            echo 'Tên sản phẩm <input type="text" class="form-control" id="name_product" value="'.$row['tenhang'].'"><br>';
            echo 'Giá <input type="text" class="form-control" id="price_product" value="'.$row['dongia'].'"><br>';
            echo 'Số lượng <input type="text" class="form-control" id="quantity" value="'.$row['soluong'].'"><br>';
            
        }
            $row2 = mysqli_fetch_assoc(mysqli_query($conn,$sql));
            $sql = "select * from danhmuc";
            $kq = mysqli_query($conn,$sql);
            echo '<select class="form-control" id="tdm">';
            while($row1 = mysqli_fetch_assoc($kq)){
                $selected = '';
                if($row1['id']==$row2['iddanhmuc']){ 
                    $selected = 'selected';
                }
                    echo '<option value="'.$row1['id'].'" '.$selected.'>'.$row1['tendanhmuc'].'</option>';     
            }
            echo '</select>';
            
        }
        function edit_product(){
            $tdm = $_GET['tdm'];
            $name = $_GET['name'];
            $qty = $_GET['qty'];
            $dg = $_GET['price'];
            $id = $_GET['id'];
            $conn = mysqli_connect("localhost","root","","do_an");
            $sql = "update hanghoa set tenhang = '$name', soluong = '$qty',dongia = '$dg', iddanhmuc = '$tdm' WHERE id = $id";
            mysqli_query($conn,$sql);
        }
        function view_delete_product(){
            $id = $_GET['id'];
            $conn = mysqli_connect("localhost","root","","do_an");
            $sql = "select * from hanghoa where id = $id";
            $kq = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($kq)){
                echo 'Bạn muốn xóa hàng hóa có tên: '.$row['tenhang']."?";
            }
        }
        function delete_product(){
            $id = $_GET['id'];
            $conn = mysqli_connect("localhost","root","","do_an");
            $sql = "delete from hanghoa WHERE id = $id";
            mysqli_query($conn,$sql);
        }
        function load_option(){
            $conn = mysqli_connect("localhost","root","","do_an");
            $sql = "select * from danhmuc";
            $kq = mysqli_query($conn,$sql);
            echo '<option>Tất Cả</option>';
            while($row = mysqli_fetch_assoc($kq)){
                echo '<option>'.$row['tendanhmuc'].'</option>';     
            }
        }
        function option(){
            $name = $_GET['name'];
            $conn = mysqli_connect("localhost","root","","do_an");
            $sql = "select hanghoa.id,tenhang,dongia,images,soluong,tendanhmuc from hanghoa inner join danhmuc on hanghoa.iddanhmuc = danhmuc.id where tendanhmuc = '$name'";
            $kq = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($kq)){
                echo '<tr>
                        <td>'.$row['tenhang'].'</td>
                        <td>'.$row['dongia'].' $</td>
                        <td><img style="margin:0px;padding:0px; width:70px;height:50px;" src="../assets/img/menu/'.$row['images'].'"></td>
                        <td>'.$row['soluong'].'</td>
                        <td>'.$row['tendanhmuc'].'</td>
                        <td> 
                            <a href="#" class="active">
                            <i class="fas fa-edit" data-toggle="modal" data-target="#edit_product1" onclick="edit_product('.$row['id'].')"></i>
                            </a>
                        </td>    
                        <td>
                            <a href="#" class="active">
                                <i class="fa fa-times text-danger text" data-toggle="modal" data-target="#delete_product1" onclick="delete_product('.$row['id'].')"></i>
                            </a>
                        </td>
                    
                        
                    </tr>';
            }
            if($name == 'Tất Cả'){
                $sql = "SELECT hanghoa.id,tendanhmuc,tenhang,soluong,dongia,images FROM danhmuc INNER JOIN hanghoa on danhmuc.id = hanghoa.iddanhmuc";
                $kq = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($kq)){
                    echo '<tr>
                            <td>'.$row['tenhang'].'</td>
                            <td>'.$row['dongia'].' $</td>
                            <td><img style="margin:0px;padding:0px; width:70px;height:50px;" src="../assets/img/menu/'.$row['images'].'"></td>
                            <td>'.$row['soluong'].'</td>
                            <td>'.$row['tendanhmuc'].'</td>
                            <td> 
                                <a href="#" class="active">
                                <i class="fas fa-edit" data-toggle="modal" data-target="#edit_product1" onclick="edit_product('.$row['id'].')"></i>
                                </a>
                            </td>    
                            <td>
                                <a href="#" class="active">
                                    <i class="fa fa-times text-danger text" data-toggle="modal" data-target="#delete_product1" onclick="delete_product('.$row['id'].')"></i>
                                </a>
                            </td>
                        
                            
                        </tr>';
                }
            }
        }
?>
