    <?php
        $id = $_GET['id'];
        $conn = mysqli_connect('localhost','root','','do_an');
        $sql = "select * from binhluan where idhanghoa = $id ";
        $kq = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($kq)){
            ?>
            <li>
                <div class="media">
                    <div class="media-left">
                        <img style="width: 90px;height:90px;" class="media-object news-img" src="assets/img/menu/avatar.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h4 class="author-name"><?php echo $row['name']?></h4>
                        <span class="comments-date"> <?php echo $row['ngaygio']?></span>
                        <p><?php echo $row['comment']?></p>
                        <a href="#" onclick="reply(<?php echo $row['id']?>,<?php echo $row['idhanghoa']?>)" class="reply-btn" data-toggle="modal" data-target="#modal">Reply</a>
                    </div>
                </div>
            </li>
            </ul>
            <ul class="children">   
                <?php echo show1($row['id'])?>
            </ul>

    

        
    <?php
        }
        function show1($idd){
            $conn = mysqli_connect('localhost','root','','do_an');
            $sql = "select * from reply where idbinhluan = $idd ";
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
       
           
        }
    ?>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Reply</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="reply_cmt">
                                <textarea id="reply_form" cols="60" rows="5"></textarea>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="mu-readmore-btn" id="clickl" style="padding: 15px 35px;border:2px #c1a35f;" data-dismiss="modal">reply</button>
                        </div>
                        </div>
                    </div>
                </div>


<button class="mu-readmore-btn" onclick="hide_cmt()" style="padding: 15px 35px;width:750px;border:2px #c1a35f;">Ẩn Bình Luận</button>


    
    <!-- <ul class="children">
            <li>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object news-img" src="assets/img/blog-cmt/cmt4.png" alt="img">
                    </div>
                    <div class="media-body">
                        <h4 class="author-name">Klay Thompson</h4>
                        <span class="comments-date"> Posted on 24th May, 2020</span>
                        <p>Phở thật sự rất ngon !!</p>
                        <a href="#" class="reply-btn">Reply</a>
                    </div>
                </div>
            </li> -->