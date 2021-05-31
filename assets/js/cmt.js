$(document).ready(function() {
    $(".comments").load("blog-cmt1.html");
});

function backtopcmt() {
    document.documentElement.scrollTop = 2390;
}
var x;

function gallery(x) {
    switch (x) {
        case 1:
            $(".comments").load("blog-cmt1.html");
            backtopcmt();
            break;
        case 2:
            $(".comments").load("blog-cmt2.html");
            backtopcmt();
            break;
        case 3:
            $(".comments").load("blog-cmt3.html");
            backtopcmt();
            break;


    }
}