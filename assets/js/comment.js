$(document).ready(function(){
    
});
function comment(id){
    var comment = CKEDITOR.instances['comment_form'].getData();
    if(comment != ''){
        $.ajax({
        url:'comment.php',
        method:'get',
        data:{id:id,comment_form:comment},
        success:function(data){
            
            $('#list-comment').load('comment-list.php?id='+id);
            CKEDITOR.instances['comment_form'].updateElement();
            CKEDITOR.instances['comment_form'].setData('');
        }
    })
    
    } 
}
function load_cmt(id){
    $('#list-comment').show();
    $('#list-comment').load('comment-list.php?id='+id);
}
function hide_cmt(){
    $('#list-comment').hide();
}

function reply(id,id1){
    $('#clickl').on('click',function(){
        var reply = $('#reply_form').val();
        if(reply != ''){
            $.ajax({
            url:'reply.php',
            method:'get',
            data:{id_cmt:id,reply_form:reply},
            success:function(data){
                $('#list-comment').load('comment-list.php?id='+id1);
                $('.modal-backdrop').remove();
            }
            
            })
        }
     
    })

}
