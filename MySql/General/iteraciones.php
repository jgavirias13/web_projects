<?php
header("Content-type:text/html; charset=utf-8");
//Iterar sobre los resultados del query
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
//tildes
$acentos = $conexion->query("set names 'utf8'");

$query = "Select * from usuarios";

$resultado = mysqli_query($conexion, $query);

if($resultado){
    while($fila = mysqli_fetch_array($resultado)){
        print_r($fila);
        echo "<br />";
    }
}else{
    echo "Error al consultar los usuarios";
    echo "<br />";
}

?>