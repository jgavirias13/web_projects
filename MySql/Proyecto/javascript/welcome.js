$(function(){
    $("#area").bind('input propertychange', function(){
        $.ajax({
            method:"POST",
            url:"actualizarDiario.php",
            data:{
                content:$("#area").val()
            }
        })
    });
});