$(document).ready(function(){
    menu();
    all_menu();
})
function menu(id){
    
    $('#load_menu').load('load-menu.php?iddanhmuc='+id);
}
function all_menu(){
    $('#load_menu').load('load-menu.php?iddanhmuc=2');
}

