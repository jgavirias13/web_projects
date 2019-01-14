<?php
    header("Content-type: text/html; charset=\"utf-8\"");
    $usuarios = array("jgaviria", "jgavirias", "jgaviria13", "jgavirias13", "jgaviri6");
    $esta = false;
    if($_POST and $_POST['nombre'] != ""){
        foreach($usuarios as $usuario){
            if($usuario == $_POST['nombre']){
                $esta = true;
                break;
            }
        }

        if($esta){
            echo "Estas en la lista";
        }else{
            echo "No existe este usuario";
        }
    }
?>

<form method="POST">
    ¿Cual es tu nombre?
    <input name="nombre" type="text">
    <input type="submit" value="Enviar">
</form>