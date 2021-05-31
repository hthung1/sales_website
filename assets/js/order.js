var pg = 0,iddm = 0,limit = 3,search = '',id1=0;let min = 0;
let max = 10;

$(document).ready(function(){
    search = $('#search-item').val().replace(/\s/g, '+');
    min = $('#min').val();
    max = $('#max').val();
    $('#product-order').load('shop.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
    $('#cart').load('add-cart.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
    $('#limit').on('change', function () {
        limit= $(this).val();
        $('#product-order').load('shop.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
    });
    $('#search-item').on('keyup', function () {
        search = $(this).val().replace(/\s/g, '+');
        $('#product-order').load('shop.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
    });
    $('#min').on('keyup', function () {
        min = $('#min').val();
        $('#product-order').load('shop.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
    });
    $('#max').on('keyup', function () {
        max = $('#max').val();
        $('#product-order').load('shop.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
    });
    
})
    
function page(page){
    pg = page;
    $('#product-order').load('shop.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
}   
function product_order(id){
    iddm = id;
    $('#product-order').load('shop.php?id='+id1+'&iddanhmuc='+iddm+'&page='+pg+'&limit='+limit+'&search='+search+'&min='+min+'&max='+max);
}
function add_cart(id){
    id1 =id;
    $('#cart').load('add-cart.php?id='+id1);
}
function delete_cart(id){
    id2 =id;
    $('#cart').load('delete-cart.php?id='+id2);
}
function clear_cart(){
    $('#cart').load('clear-cart.php');
}