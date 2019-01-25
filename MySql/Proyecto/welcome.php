<?php
include('session.php');

$query = "Select diario from diarios where usuarios_id = 
    (select usuarios_id from usuarios where usuario = '$login_session')";
$result = mysqli_query($conexion, $query);
if($result and mysqli_num_rows($result) == 1){
    $diario = mysqli_fetch_array($result)[0];
}else if($result and mysqli_num_rows($result) == 0){
    $query = "Insert into diarios (usuarios_id) values((select usuarios_id from usuarios where usuario = '$login_session'))";
    mysqli_query($conexion, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mi diario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    
    <?php include("header.php"); ?>
    <div id="contenedor">
        <textarea class="form-control" id="area"><?php echo $diario ?></textarea>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"></script>
    <script src="javascript/welcome.js"></script>
</body>
</html>