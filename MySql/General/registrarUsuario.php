<?php
    session_start();
    if($_POST){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        if($usuario and $password){
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

            $query = "Select usuario from usuarios where usuario = '".$usuario."'";
            $resultado = mysqli_query($conexion, $query);
            if(mysqli_num_rows($resultado) == 0){
                $query = "Insert into usuarios (usuario, password) values('".$usuario."', '".$password."')";
                $resultado = mysqli_query($conexion, $query);
                if(!$resultado){
                    echo "Error al registrar a el usuario";
                    echo "<br />";
                    echo "errno de depuracion".mysqli_errno($conexion).PHP_EOL;
                    echo "<br />";
                    echo "error de depuracion".mysqli_error($conexion).PHP_EOL;
                    echo "<br />";
                }else{
                    $_SESSION['username'] = $usuario;
                    header("Location: inicio.php");
                }
            }else{
                echo "El usuario ya existe";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrar usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" id="submit" value="Registrar">
    </form>
</body>
</html>