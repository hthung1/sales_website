$(document).ready(function(){
    insert_categories();
    load_categories();
    load_product();
    load_option();
    show_order();
    back_order();
})
// Categories
function insert_categories(){
    
    $('#add-categoeies').on('click',function(){
        var name = $('#name_categories').val();
        if(name != ''){
            $.ajax({
            url:'categories/insert-categories.php',
            method:'post',
            data:{tendanhmuc:name},
            success:function(data){
                $('#form_categories')[0].reset();
            }
        })
        }
        
    })
}
function load_categories(){
    $('#load_categories').load('categories/load_categories.php');
}
function edit_categories(id){
    $('#text_edit').load('categories/view-edit-categories.php?id='+id);
    $('#edit_categories').on('click',function(){
        var name = $('#name_categories').val();
        $.ajax({
            url:'categories/update-categories.php',
            method:'get',
            data:{tendanhmuc:name,id:id},
            success:function(data){}
        })
        location.reload();
    })
}
function delete_categories(id){
    $('#view_delete').load('categories/view-delete-categories.php?id='+id);
    $('#delete_categories').on('click',function(){
        $.ajax({
            url:'categories/delete-categories.php',
            method:'get',
            data:{id:id},
            success:function(data){
                $('#load_categories').load('categories/load_categories.php');
                // $('#delete').hide();
                $('.modal-backdrop').remove();
                // location.reload();
            }
        })
    })
}

// Product
function load_product(){
    $('#view_product').load('product/view-product.php');
}
function load_option(){
    $('#load_option').load('product/load-option.php');
    $('#load_option').on('click',function(){
         var tdm = $('#load_option').val().replace(/\s/g, '+');
         $('#view_product').load('product/option.php?name='+tdm);
    })
   
}
function delete_product(id){
    $('#view_delete_product').load('product/view-delete-product.php?id='+id);
    $('#delete_product').on('click',function(){
        $.ajax({
            url:'product/delete-product.php',
            method:'get',
            data:{id:id},
            success:function(data){
                $('#view_product').load('product/view-product.php');
                $('#delete_product1').hide();
                $('.modal-backdrop').remove();
            }
        })
    })
}
function edit_product(id){
    $('#text_edit_product').load('product/view-edit-product.php?id='+id);
    $('#edit_product').on('click',function(){
        var name = $('#name_product').val(),
            price = $('#price_product').val(),
            qty = $('#quantity').val(),
            tdm = $('#tdm').val()
        $.ajax({
            url:'product/update-product.php',
            method:'get',
            data:{id:id,name:name,price:price,qty:qty,tdm:tdm},
            success:function(data){
                $('#view_product').load('product/view-product.php');
                $('#edit_product1').hide();
                $('.modal-backdrop').remove();
            }
        })
    })
}

function show_order(){
    $('#show_order').load('show_order.php?status=All');
    $('#_detail').hide();
}
$('#kkk').on('change', function(){
    stt= $('#kkk').val();
    $('#show_order').load('show_order.php?status='+stt);
});

function show_detail(id){
    $('#_detail').show();
    $('#show_detail').load('show_detail.php?id='+id);
    $('#_order').hide();
}

function back_order(){
    $('#back_order').on('click',function(){
        $('#_order').show();
        $('#show_order').load('show_order.php?status=All');
        $('#_detail').hide();
    })  
}