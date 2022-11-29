$(document).ready(function(){

    $('#exampleInputEmail1').keyup(function(){

        var exampleInputEmail1 = $('#exampleInputEmail1').val();

        if(exampleInputEmail1!=""){
            $.post('post.php',{exampleInputEmail1:exampleInputEmail1},function(data){
                $('.feedBack').text(data);
            });

        }else{
            $('.feedBack').text('allo porto');
        }
        });
    

});