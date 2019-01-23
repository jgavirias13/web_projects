$(function(){
    $("form").submit(function(e){
        if($("#usuario").val() == "" || $("#email").val() == "" || $("#password").val() == ""
            || $("#passwordConfirm").val() == ""){
            var error = "Ingresa todos los campos para continuar";
            $("#error").html("<div class=\"alert alert-danger\" role=\"alert\" <strong>"+
                error+"</strong></div>");
            return false;
        }else if($("#password").val() != $("#passwordConfirm").val()){
            var error = "Los campos de password no corresponden";
            $("#error").html("<div class=\"alert alert-danger\" role=\"alert\" <strong>"+
                error+"</strong></div>");
            return false;
        }else{
            return true;
        }
    });
});