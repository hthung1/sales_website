/** 
  
  Custom JS
  

  1. FIXED NAVBAR 
  2. TOP SLIDER
  3. ABOUT US (SLICK SLIDER) 
  4. DATEPICKER
  5. CUS SLIDER (SLICK SLIDER)
  6. TESTIMONIAL SLIDER (SLICK SLIDER)
  7. MIXIT FILTER (FOR GALLERY)
  8. FANCYBOX (FOR PORTFOLIO POPUP VIEW) 
  9. MENU SMOOTH SCROLLING
  10. HOVER DROPDOWN MENU
  11. SCROLL TOP BUTTON
  12. PRELOADER  
  13. LOGIN-FORM

  
**/

jQuery(function($) {


    /* ----------------------------------------------------------- */
    /*  1. FIXED NAVBAR 
    /* ----------------------------------------------------------- */


    jQuery(window).bind('scroll', function() {
        if (jQuery(window).scrollTop() > 200) {
            jQuery('.mu-main-navbar').addClass('navbar-bg');
            jQuery('.navbar-brand').addClass('navbar-brand-small');
        } else {
            jQuery('.mu-main-navbar').removeClass('navbar-bg');
            jQuery('.navbar-brand').removeClass('navbar-brand-small');
        }
    });

    /* ----------------------------------------------------------- */
    /*  2. TOP SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */

    jQuery('.mu-top-slider').slick({
        dots: false, // các chấm chỉ bảo trang hiện tai đang show
        infinite: true, 
        arrows: true,
        speed: 500,
        autoplay: true,
        fade: true, // mờ dần ?
        cssEase: 'linear'
    });

    /* ----------------------------------------------------------- */
    /*  3. ABOUT US (SLICK SLIDER)
    /* ----------------------------------------------------------- */

    jQuery('.mu-abtus-slider').slick({
        dots: false,
        infinite: true,
        arrows: false,
        speed: 500,
        autoplay: true,
        fade: true,
        cssEase: 'linear'
    });

    /* ----------------------------------------------------------- */
    /*  4. DATEPICKER
    /* ----------------------------------------------------------- */

    jQuery('#datepicker').datepicker();

    /* ----------------------------------------------------------- */
    /*  5. CUS SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */

    jQuery('.mu-cus-nav').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

    /* ----------------------------------------------------------- */
    /*  6. TESTIMONIAL SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */

    jQuery('.mu-testimonial-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        autoplay: true,
        speed: 500,
        cssEase: 'linear'
    });


    /* ----------------------------------------------------------- */
    /*  7. MIXIT FILTER (FOR GALLERY) 
    /* ----------------------------------------------------------- */

    jQuery(function() {
        jQuery('#mixit-container').mixItUp();
    });

    /* ----------------------------------------------------------- */
    /*  8. FANCYBOX  
    /* ----------------------------------------------------------- */

    jQuery(document).ready(function() {
        jQuery(".fancybox").fancybox();
    });

    /* ----------------------------------------------------------- */
    /*  9. MENU  SCROLLING
    /* ----------------------------------------------------------- */

    //MENU SCROLLING với các item đã được chọn

    // Bộ chọn
    var lastId,
        topMenu = $(".mu-main-nav"),
        topMenuHeight = topMenu.outerHeight() + 13, // trỏ tới tọa độ menu với khoảng cách tùy chọn
        // Tìm tất cả các mục danh sách thẻ a trong id topMenu
        menuItems = topMenu.find('a[href^=\\#]'),
        // tương ứng với các itemtrong menu
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });

    // Bấm , trỏ vào các list menu
    // Animation cho việc Scroll
    menuItems.click(function(e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 32; //Trả về tọa độ offset các phần tử được chọn
        jQuery('html, body').stop().animate({ // Gán animation , điều chỉnh tốc độ khi click từ nav
            scrollTop: offsetTop
        }, 1500);
        jQuery('.navbar-collapse').removeClass('in');
        e.preventDefault();
    });

    // Liên kết với Scrool
    jQuery(window).scroll(function() {
        // Nhận lấy vị trí scroll tới
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Nhận id của mục đang scroll 
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Lấy id của phần tử scroll hiện tại
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Thêm / xóa lớp hoạt động 
            menuItems
                .parent().removeClass("active")
                .end().filter("[href=\\#" + id + "]").parent().addClass("active");
        }
    })

    /* ----------------------------------------------------------- */
    /*  10. HOVER DROPDOWN MENU
    /* ----------------------------------------------------------- */

    //  hover dropdown menu
    jQuery('ul.nav li.dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });


    /* ----------------------------------------------------------- */
    /*  11. SCROLL TOP BUTTON
    /* ----------------------------------------------------------- */

    //kiểm tra cửa sổ , nếu cách 300px so với cửa sổ thì hiện button

    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 300) {
            jQuery('.scrollToTop').fadeIn();
        } else {
            jQuery('.scrollToTop').fadeOut();
        }
    });

    //click để scroll lên top

    jQuery('.scrollToTop').click(function() {
        jQuery('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    /* ----------------------------------------------------------- */
    /*  12. PRELOADER
    /* ----------------------------------------------------------- */

//     jQuery(window).load(function() { // đảm bảo toàn bộ trang web được tải      
//         jQuery('#aa-preloader-area').delay(2000).fadeOut('slow'); // biến mất gif      
//     })

});


/* ----------------------------------------------------------- */
/*  13. LOGIN 
/* ----------------------------------------------------------- */
var attempt = 3;

function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "ThitBoKho" && password == "khanhhang2412") {
        alert("Dang nhap thanh cong");
        window.location = "index.html";

    } else {
        attempt--; // giảm dần số lần nhập.
        alert("Ban con " + attempt + " lan nhap");
        // vô hiệu quá sau 3 lần thử.
        if (attempt == 0) {
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
            return false;
        }
    }
}