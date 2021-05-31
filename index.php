<?php 
    include('include/header.php');
?>
    <section id="mu-restaurant-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-restaurant-menu-area">
                        <div class="mu-title">
                            <span class="mu-subtitle">Discover</span>
                            <h2>OUR MENU</h2>
                            <i class="fa fa-spoon"></i>
                            <span class="mu-title-bar"></span>
                        </div>
                        <div class="mu-restaurant-menu-content">
                            <ul class="nav nav-tabs mu-restaurant-menu">
                                <?php
                                    $conn = mysqli_connect("localhost","root","","do_an");
                                    $sql = "select * from danhmuc";
                                    $kq = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_assoc($kq)){
                                        echo '<li><a href="#'.$row['id'].'" onclick="menu('.$row['id'].')"  data-toggle="tab">'.$row['tendanhmuc'].'</a></li>';
                                    }
                                ?>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active">
                                    <div class="mu-tab-content-area">
                                        <div class="row" id="load_menu">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Restaurant Menu -->

    <!-- Start Reservation section-->
    
    <!-- End Reservation section-->

    <!-- Store section-->


    <!-- End of Store section-->
    <!-- Start Client Testimonial section -->
    <section id="mu-client-testimonial">
        <div class="mu-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-client-testimonial-area">
                            <div class="mu-title">
                                <span class="mu-subtitle">Testimonials</span>
                                <h2>What Customers Say</h2>
                                <i class="fa fa-spoon"></i>
                                <span class="mu-title-bar"></span>
                            </div>
                            <!-- testimonial content -->
                            <div class="mu-testimonial-content">
                                <!-- testimonial slider -->
                                <ul class="mu-testimonial-slider">
                                    <li>
                                        <div class="mu-testimonial-single">
                                            <div class="mu-testimonial-info">
                                                <p>Feliciano là một website ẩm thực miền Trung rất là tuyệt vời</p>
                                            </div>
                                            <div class="mu-testimonial-bio">
                                                <p>- Khanh -</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mu-testimonial-single">
                                            <div class="mu-testimonial-info">
                                                <p>Feliciano là một website ẩm thực miền Trung rất là tuyệt vời</p>
                                            </div>
                                            <div class="mu-testimonial-bio">
                                                <p>- Khanh -</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mu-testimonial-single">
                                            <div class="mu-testimonial-info">
                                                <p>Feliciano là một website ẩm thực miền Trung rất là tuyệt vời</p>
                                            </div>
                                            <div class="mu-testimonial-bio">
                                                <p>- Le Dinh Khanh -</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Testimonial section -->



    <!-- Start Cus Section-->
    <section id="mu-cus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-cus-area">
                        <div class="mu-title">
                            <span class="mu-subtitle"> Customers </span>
                            <h2>Customers</h2>
                            <i class="fa fa-spoon"></i>
                            <span class="mu-title-bar"></span>
                        </div>
                        <div class="mu-cus-content">
                            <ul class="mu-cus-nav">
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/4.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Le Dinh Nam</h4>
                                            <span>Student</span>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/2.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Le Dinh Khanh</h4>
                                            <span>Teacher</span>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/3.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Tran Manh Cuong</h4>
                                            <span>Docter</span>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/5.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Nguyen Cong Vinh</h4>
                                            <span>Gamer</span>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/1.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Dang Thanh Hai</h4>
                                            <span>Actor</span>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/2.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Phan Thanh Long</h4>
                                            <span> Chef</span>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/3.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Nguyen Tan Tai</h4>
                                            <span> Farmer</span>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="mu-single-cus">
                                        <figure class="mu-single-cus-img">
                                            <img src="assets/img/chef/5.jpg" alt="cus img">
                                        </figure>
                                        <div class="mu-single-cus-info">
                                            <h4>Le Dinh Khanh</h4>
                                            <span>Player</span>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Chef Section -->

    <!-- Start Latest News -->
    <section id="mu-latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-latest-news-area">
                        <div class="mu-title">
                            <span class="mu-subtitle">Latest News</span>
                            <h2>FROM OUR BLOG</h2>
                            <i class="fa fa-spoon"></i>
                            <span class="mu-title-bar"></span>
                        </div>
                        <div class="mu-latest-news-content">
                            <div class="row">
                                <!-- start single blog -->
                                <?php
                                    $conn = mysqli_connect("localhost","root","","do_an");
                                    $sql = "select * from hanghoa order by rand() limit 2";
                                    $kq = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_assoc($kq)){
                                        echo '<div class="col-md-6">
                                        <article class="mu-news-single">
                                            <h3><a href="blog.php?id='.$row['id'].'">'.$row['tenhang'].'</a></h3>
                                            <figure class="mu-news-img">
                                                <a href="blog.php?id='.$row['id'].'"><img style="width:455;height:256px;" src="assets/img/menu/'.$row['images'].'" alt="img"></a>
                                            </figure>
                                            <div class="mu-news-single-content">
                                                <ul class="mu-meta-nav">
                                                    <li>By Admin</li>
                                                </ul>
                                                <p>Blog viet ve '.$row['tenhang'].'</p>
                                                <div class="mu-news-single-bottom">
                                                    <a href="blog.php?id='.$row['id'].'" class="mu-readmore-btn">Read More</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>';

                                    }
                                ?>
                                
                            </div>

                            <!-- Start brows more btn -->
                            <a href="#" class="mu-browsmore-btn">BROWS MORE</a>
                            <!-- End brows more btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News -->



    <!-- Start Contact section -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <div class="mu-title">
                            <span class="mu-subtitle">Get In Touch</span>
                            <h2>Contact Us</h2>
                            <i class="fa fa-spoon"></i>
                            <span class="mu-title-bar"></span>
                        </div>
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                        <form class="mu-contact-form">
                                            <div class="form-group">
                                                <label for="name">Họ và Tên</label>
                                                <input type="text" class="form-control" id="name" placeholder="Họ và Tên">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email </label>
                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="subject">Nghề Nghiệp</label>
                                                <input type="text" class="form-control" id="subject" placeholder="Nghề Nghiệp">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Lời Nhắn</label>
                                                <textarea class="form-control" id="message" cols="30" rows="10" placeholder="Lời nhắn của bạn"></textarea>
                                            </div>
                                            <button type="submit" class="mu-send-btn">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        <div class="mu-contact-widget">
                                            <h3>Office Address</h3>
                                            <p>Da Nang</p>
                                            <address>
                        <p><i class="fa fa-phone"></i> 0944934765</p>
                        <p><i class="fa fa-envelope-o"></i>ldkhanh.19it2@sict.udn.vn</p>
                        <p><i class="fa fa-map-marker"></i>73 Nguyen Tao - Hoa Hai - Ngu Hanh Son - Da Nang</p>
                      </address>
                                        </div>
                                        <div class="mu-contact-widget">
                                            <h3>Open Hours</h3>
                                            <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact section -->


    <!-- Start Map section -->
    <section id="mu-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.772608740055!2d108.24756751416864!3d15.973246946247418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108878ee1dbf%3A0xb466fcf06b910a38!2zS2hvYSBDw7RuZyBuZ2jhu4cgdGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIC0gxJDhuqFpIGjhu41jIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2sbd!4v1592702211682!5m2!1svi!2sbd"
            width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
    </section>
    <!-- End Map section -->

    <!-- Start Footer -->
    <footer id="mu-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-footer-area">
                        <div class="mu-footer-social">
                            <a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            <a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            <a href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                            <a href="#"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery library -->


    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>

    <!-- Date Picker -->
    <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>
</body>

</html>