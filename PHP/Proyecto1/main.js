$(function(){
    $("form").submit(function(e){
        
        var mensajeError = "Ingresa ";
        if($("#email").val() == ""){
            mensajeError += "el correo, ";
        }
        if($("#asunto").val() == ""){
            mensajeError += "el asunto, ";
        }
        if($("#mensaje").val() == ""){
            mensajeError += "el contenido, ";
        }
        
        if(mensajeError != "Ingresa "){
            mensajeError += "para continuar"
            $("#error").html("<div class=\"alert alert-danger\" role=\"alert\" <strong>"
                +mensajeError
                +"</strong></div>");
            return false;
        }else{
            return true;
        }
    });
});