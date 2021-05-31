<?php
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','do_an');
    $sql = "select * from reply where idbinhluan = $id ";
    $kq = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($kq)){
        echo '<li>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object news-img" src="assets/img/menu/avatar.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h4 class="author-name">'.$row['name'].'</h4>
                        <span class="comments-date"> '.$row['ngaygio'].'</span>
                        <p>'.$row['comment'].'</p>
                
                    </div>
                </div>
            </li>';
    }
?>
