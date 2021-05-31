<?php
    $iddm = $_GET['iddanhmuc'];
    $conn = mysqli_connect("localhost","root","","do_an");
    $sql = "select * from hanghoa where iddanhmuc=$iddm";
    $kq = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($kq)){
        echo '<div class="col-md-6">
                    <div class="mu-tab-content-left">
                        <ul class="mu-menu-item-nav">
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" style="width:110px;height:110px;" src="assets/img/menu/'.$row['images'].'" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="blog.php?id='.$row['id'].'">'.$row['tenhang'].'</a></h4>
                                        <span class="mu-menu-price">$'.$row['dongia'].'</span>
                                        <p>'.$row['mota'].'</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>';
    }
?>