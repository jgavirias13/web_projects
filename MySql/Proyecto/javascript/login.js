$(function(){
    $("form").submit(function(e){
        if($("#usuario").val() == "" || $("#password").val() == ""){
            var error = "Ingresa el usuario y el password para continuar";
            $("#error").html("<div class=\"alert alert-danger\" role=\"alert\" <strong>"+
                error+"</strong></div>");
            return false;
        }else{
            return true;
        }
    });
});