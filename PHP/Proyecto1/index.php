<?php

if($_POST){
    //Comprobar que todos los campos del formulario hayan sido ingresados
    $correo = $_POST['email'];
    $asunto = $_POST['asunto'];
    $contenido =  $_POST['mensaje'];
    $mailTo = "jgavirias13@gmail.com";
    $mensajeError = "";

    if($correo != "" and $asunto != "" and $contenido != ""){
        //Enviar el correo
        $correo = "From: ".$correo;
        $response = mail($mailTo, $asunto, $contenido, $correo);
        if($response){
            $mensajeError = "<div class=\"alert alert-success\" role=\"alert\" <strong>Mensaje enviado con exito</strong></div>";
        }else{
            $mensajeError = "<div class=\"alert alert-danger\" role=\"alert\" <strong>Ha ocurrido un error al enviar el mensaje</strong></div>";
        }
    }else{
        $mensaje = "Ingresa ";
        if($correo == ""){
            $mensaje .= "el correo, ";
        }
        if($asunto == ""){
            $mensaje .= "el asunto, ";
        }
        if($contenido == ""){
            $mensaje .= "el contenido, ";
        }
        $mensajeError = "<div class=\"alert alert-danger\" role=\"alert\" <strong>".$mensaje."</strong></div>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    
    <div class="container">
        <h1 class="titulo">Contacta con nosotros</h1>
        <div id="error">
            <?php echo $mensajeError; ?>
        </div>
        <form method="POST">
            <div class="form-group-row campo">
                <label for="email" class="col-sm-2 form-control-label">Dirección email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email">
                </div>
            </div>
            <div class="form-group-row campo">
                <label for="asunto" class="col-sm-2 form-control-label">Asunto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto del correo">
                </div>
            </div>
            <div class="form-group-row campo">
                <label for="mensaje" class="col-sm-2 form-control-label">Mensaje</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Cuerpo del correo"></textarea>
                </div>
            </div>
            <div class="form-group-row">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>