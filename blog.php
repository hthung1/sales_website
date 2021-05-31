
<?php
    include('include/head-blog.php');
?>

    <!-- Start Blog -->
    
    <section id="mu-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-blog-area">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="mu-blog-content mu-blog-details">
                                    <!-- Start Single blog item -->

                                    <article class="mu-news-single">


                                    <?php
                                        $id = $_GET['id'];
                                        $conn = mysqli_connect("localhost","root","","do_an");
                                        $sql = "select * from hanghoa where id = $id";
                                        $kq = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($kq)){
                                            echo '<h2><a href="#">'.$row['tenhang'].'</a></h2>
                                            <figure class="mu-news-img">
                                                <a href="#"><img style="width:617px;height:347px;" src="assets/img/menu/'.$row['images'].'"></a>
                                            </figure>
                                            <div class="mu-news-single-content">
                                                <ul class="mu-meta-nav">
                                                    
                                                    <li>By Admin</li>
                                                </ul>
                                                <p>'.$row['mota'].'</p>
                                                <blockquote>
                                                    <p>
                                                    '.$row['mota1'].'
                                                    </p>
                                                </blockquote>
                                                
                                            </div>';
                                        }
                                    ?>


                                    

                                        
                                        <div class="mu-news-single-bottom">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mu-news-single-tag">
                                                        <ul class="mu-news-single-tagnav">
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mu-news-single-social">
                                                        <ul class="mu-news-single-socialnav">
                                                            <li>SHARE :</li>
                                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                            <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- End Single blog item -->
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mu-blog-related-post">
                                            <div class="mu-title">
                                                <h2>Blog</h2>
                                                <i class="fa fa-spoon"></i>
                                                <span class="mu-title-bar"></span>
                                            </div>
                                            <div class="mu-blog-related-post-area">
                                                <div class="row">
                                                    <?php
                                                        $conn = mysqli_connect("localhost","root","","do_an");
                                                        $sql = "select * from hanghoa order by rand() limit 2";
                                                        $kq = mysqli_query($conn,$sql);
                                                        while($row = mysqli_fetch_assoc($kq)){
                                                            echo '<div class="col-md-6 col-sm-6">
                                                            <article class="mu-news-single">
                                                                <h3><a href="blog.php?id='.$row['id'].'">'.$row['tenhang'].'</a></h3>
                                                                <figure class="mu-news-img">
                                                                    <a href="blog-pho.php"><img style="width:294px;height:165px;" src="assets/img/menu/'.$row['images'].'" alt="img"></a>
                                                                </figure>
                                                                <div class="mu-news-single-content">
                                                                    <ul class="mu-meta-nav">
                                                                        <li>By Admin</li>
                                                                    </ul>
                                                                    <p>'.$row['mota'].'</p>
                                                                    <div class="mu-news-single-bottom">
                                                                        <a class="mu-readmore-btn" href="blog.php?id='.$row['id'].'">Read More</a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>';
                                                        }

                                                    ?>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End related news -->
                                <!-- Start Blog comments thread -->
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mu-comments-area">
                                            <h3 onclick="load_cmt(<?php echo $id?>)">Hiện Bình Luận</h3>
                                            <div class="comments">
                                                <ul class="commentlist" id="list-comment">
                                                    


                                                            
                                                  
                                                </ul>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Blog comments thread -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="respond">
                                            <h3 class="reply-title">Để lại bình luận</h3>
                                            <form id="commentform" method="get">
                                                
                                                <p class="comment-form-comment">
                                                    <label for="comment">Comment</label>
                                                    <textarea name="comment1" id="comment_form" cols="45" rows="8" aria-required="true" required="required"></textarea>
                                                </p>

                                                    <input type="button" onclick="comment(<?php echo $id;?>)" id="comment_submit" name="submit1" class="mu-send-btn" value="Bình Luận">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>







                            <script>
                                CKEDITOR.replace('comment1');
                            </script>





                            
                            <!-- Start Blog Sidebar -->
                            <div class="col-md-4 col-sm-4">
                                <aside class="mu-blog-sidebar">
                                    <!-- Blog Sidebar Single -->
                                    <div class="mu-blog-sidebar-single">
                                        <h3>Các món ăn </h3>
                                        <ul class="mu-catg-nav">
                                            <li> <a href="blog-myquang.php"> Mì Quảng</a> </li>
                                            <li><a href="blog-single.php">Bánh Bèo</a></li>
                                            <li><a href="blog-banhxeo.php">Bánh Xèo</a></li>
                                            <li><a href="#">Chè Thái</a></li>
                                            <li><a href="#">Bánh Mỳ</a></li>
                                            <li> <a href="#">Bánh Tráng Trộn</a> </li>
                                            <li> <a href="blog-pho.php">Phở</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Blog Sidebar Single -->
                                    <!-- Blog Sidebar Single -->
                                    <div class="mu-blog-sidebar-single">
                                        <h3>Bảng Tin</h3>
                                        <ul class="mu-recent-news-nav">
                                            <li><a href="#">Phở là món ăn dân dã </a></li>
                                            <li><a href="#">Phở nổi tiếng ra thế giới từ lúc nào? </a></li>
                                            <li><a href="#">Nguyên liệu làm phở là gì ?</a></li>
                                            <li><a href="#">Phở ăn liền có ngon không ?</a></li>
                                            <li>
                                                <a href="#">Phở có từ lúc nào </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Blog Sidebar Single -->
                                    <!-- Blog Sidebar Single -->
                                    <div class="mu-blog-sidebar-single">
                                        <h3>Tags</h3>
                                        <div class="tag-cloud">
                                            <a href="blog-pho.php">Phở</a>
                                            <a href="blog-banhmy.php">Bánh Mì</a>
                                            <a href="#">Trà Chanh</a>
                                            <a href="blog-banhxeo.php">Bánh Xèo</a>
                                            <a href="#">Trà Sữa</a>
                                            <a href="#">Bánh Căn</a>
                                            <a href="#">Hủ Tiếu</a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

    <!-- Footer -->
    <footer id="mu-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-footer-area">
                        <div class="mu-footer-social">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-youtube"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / Footer -->


    <!-- jQuery library -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/comment.js"></script>

    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>

    <script type="text/javascript" src="assets/js/waypoints.js"></script>

    <!-- Date Picker -->
    <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>

    <!-- Script CMT-->
    <script src="assets/js/cmt.js"></script>

</body>

</html>