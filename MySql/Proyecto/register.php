<?php
    if($_POST){
        session_start();
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $error = "";
        if($usuario and $password and $email){
            include("config.php");
            if($conexion){
                $usuario = mysqli_real_escape_string($conexion, $usuario);
                $password = password_hash($password, PASSWORD_DEFAULT);
                $email = mysqli_real_escape_string($conexion, $email);
                $query = "Select usuario from usuarios where usuario = '".$usuario."'";
                $resultado = mysqli_query($conexion, $query);
                if(mysqli_num_rows($resultado) == 0){
                    $query = "Insert into usuarios (usuario, password, email) values ('".$usuario
                        ."', '".$password."', '".$email."')";
                    $resultado = mysqli_query($conexion, $query);
                    if($resultado){
                        $_SESSION['login_user'] = $usuario;
                        header("Location: welcome.php");
                    }else{
                        $error = "<div class=\"alert alert-danger\" role=\"alert\" <strong>
                            No se puede establecer conexión. Intenta más tarde</strong></div>";
                    }
                }else{
                    $error = "<div class=\"alert alert-danger\" role=\"alert\" <strong>
                        El usuario ya existe</strong></div>";
                }
            }else{
                $error = "<div class=\"alert alert-danger\" role=\"alert\" <strong>
                    No se puede establecer conexión. Intenta más tarde</strong></div>";
            }
        }else{
            $error = "<div class=\"alert alert-danger\" role=\"alert\" <strong>
                Ingresa todos los campos para continuar</strong></div>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicia sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
</head>
<body>
    
    <div class="container formulario">
        <h1 class="text-dark">Mi diario secreto</h1>
        <h3 class="text-dark">Registro</h2>
        <div id="error"><?php echo $error; ?></div>
        <form method="POST">
            <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario">
            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
            <input class="form-control" type="password" name="password" id="password" placeholder="Password">
            <input class="form-control" type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirma el Password">
            <input class="btn btn-success" type="submit" value="Registrate">
        </form>
        <a href="login.php">O inicia sesión</a>
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
    <script src="javascript/register.js"></script>
</body>
</html>