<?php
include("session.php");
if(array_key_exists("content", $_POST)){
    $contenido = mysqli_real_escape_string($conexion, $_POST["content"]);
    $query = "Update diarios set diario = '$contenido' where usuarios_id = 
        (Select usuarios_id from usuarios where usuario = '$login_session')";
    mysqli_query($conexion, $query);
}
?>