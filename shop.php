<?php
    $conn = mysqli_connect("localhost","root","","do_an");
    $page=$limit=$search=$where=$iddm = '';
    $iddm = $_GET['iddanhmuc'];
    $search = $_GET['search'];
    $page = $_GET['page'];
    $limit = $_GET['limit'];
    $min = $_GET['min'];
    $max = $_GET['max'];
    $where = "where";
    if($iddm !=0 || isset($search)){
        if($iddm !=0 && !isset($search)){
            $iddm = "iddanhmuc = $iddm and";
            $search = "";
        }
        else if($iddm == 0 && isset($search)){
            $search = "tenhang like '%$search%' and";
            $iddm = "";
        }
        else if($iddm !=0 && isset($search)){
            $search = "tenhang like '%$search%' and";
            $iddm = "iddanhmuc = $iddm and";
        }
        
    }
    else if($iddm ==0 || !isset($search)){
        $iddm = "";
        $search = "";
    }
    
        $total = ceil(mysqli_num_rows(mysqli_query($conn,"select * from hanghoa $where $iddm $search dongia between $min and $max"))/$limit);
        if ($page > $total){
            $page = $total;
        }
        else if ($page < 1){
            $page = 1;
        }
        $start = ($page - 1) * $limit;
        
        $sql = "select * from hanghoa $where $iddm $search dongia between $min and $max limit $start,$limit";
        
        $list = '';
        for($i = 1;$i<=$total;$i++){
            if($page == $i){
                $list.='<li class="page-item active"><a class="page-link" onclick="page('.$i.')">'.$i.'</a></li>';
            }else{
                $list.='<li class="page-item"><a class="page-link" onclick="page('.$i.')">'.$i.'</a></li>';
            }
        }
        $kq = mysqli_query($conn,$sql);
        if(isset($kq)){
            while($row = mysqli_fetch_assoc($kq)){
            echo '<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets 1" data-item="sweets ">
                    <div class="card single-item ">
                        <div class="img-container ">
                            <img style="width:392px;height:392px;" src="assets/img/menu/'.$row['images'].' " class="card-img-top store-img " alt=" ">
                            <span class="store-item-icon ">
                            <a onclick="add_cart('.$row['id'].')"><i class="fas fa-shopping-cart "></i></a>
                            </span>
                        </div>
                        <div class="card-body ">
                            <div class="card-text d-flex justify-content-between text-capitalize ">
                                <h5 id="store-item ">'.$row['tenhang'].'</h5>
                                <h5 class="store-item-value ">$<strong id="storem-item-price " class="font-weight ">'.$row['dongia'].'</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>';
        }
        }
        
    
?>
</div>
    <div>
        <ul class="pagination pagination-sm justify-content-center" id="pagina">
            <?php echo $list;?>
        </ul>
    </div>

</div>
    </section>