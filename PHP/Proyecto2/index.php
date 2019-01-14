<?php
    if($_POST){
        $ciudad = $_POST['ciudad'];
        $paginaForecast = file_get_contents("https://es.weather-forecast.com/locations/".$ciudad."/forecasts/latest");
        $array1 = explode('(1&ndash;3 days)</span><p class="b-forecast__table-description-content"><span class="phrase">', $paginaForecast);
        $array2 = explode('</span></p></td><td class="b-forecast__table-description-cell--js" colspan="9"><span class="b-forecast__table-description-title"><h2>', $array1[1]);
        $clima = $array2[0];
        $mensaje = '<div class="alert alert-info">'.$clima.'</div>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clima</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div class="container">
        <h1 class="texto_blanco">¿Que tiempo hace ahora?</h1>
        <p class="texto_blanco">Introduce el nombre de una ciudad</p>
        <form method="POST">
            <input class="form-control" type="text" name="ciudad" id="ciudad" placeholder="Por ej. Medellin">
            <input type="submit" class="btn btn-info">
        </form>
        <div id="textoClima">
            <?php
                if($clima){
                    echo $mensaje;
                }else{
                    echo '<div class="alert alert-danger">Ha ocurrido un error al consultar</div>';
                }
            ?>
        </div>
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