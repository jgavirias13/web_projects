<?php
if($_POST and $_POST['usuario']){
    $conexion = mysqli_connect("192.168.0.16", "root", "jpGS1037649970", "test");
    if(!$conexion){
        echo "Error. No fue posible establecer una conexion a la base de datos.".PHP_EOL;
        echo "<br />";
        echo "errno de depuracion".mysqli_connect_errno().PHP_EOL;
        echo "<br />";
        echo "error de depuracion".mysqli_connect_error().PHP_EOL;
        echo "<br />";
        exit;
    }

    //Query para consultar que el usuario exista
    $usuario = $_POST['usuario'];
    $query = "Select usuario from usuarios where usuario = '".$usuario."'";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        echo "Error al consultar si existe el usuario";
    }

    if(mysqli_num_rows($resultado) > 0){
        $query = "Delete from usuarios where usuario = '".$usuario."'";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            echo "Error al eliminar el usuario";
        }else{
            echo "Eliminado exitoso";
        }
    }else{
        echo "No existe el usuario";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eliminar usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="POST">
        <label for="usuario" value="Ingresa el usuario">
        <input type="text" id="usuario" name="usuario" placeholder="Usuario">
        <input type="submit" id="enviar" value="Enviar">
    </form>
</body>
</html>

