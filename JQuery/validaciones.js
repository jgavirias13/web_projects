function isEmail(email){
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


$("#btnEnviar").click(function(){
  // Validacion de campos no vacios
  var mensaje="";
  var validacionEmpty="";

  if($("#email").val() == ""){
    validacionEmpty += "Email<br>";
  }

  if($("#telefono").val() == ""){
    validacionEmpty += "Telefono<br>";
  }

  if($("#password").val() == ""){
    validacionEmpty += "Password<br>";
  }

  if($("#confPassword").val() == ""){
    validacionEmpty += "confPassword<br>";
  }

  if(validacionEmpty != ""){
    mensaje = "<p>Los siguientes campos estan vacios:</p>"+
      validacionEmpty + mensaje;
  }

  //Validacion correo electronico
  if(!isEmail($("#email").val())){
    mensaje = "<p>El email escrito no cumple</p>" + mensaje;
  }

  //Validacion de password
  if($("#password").val() != $("#confPassword").val()){
    mensaje = "<p>Los password no coinciden</p>" + mensaje;
  }

  if(mensaje != ""){
    $("#mensaje").html(mensaje);
  }else{
    $("#mensaje").html("<p>Exitoso</p>");
  }
});
