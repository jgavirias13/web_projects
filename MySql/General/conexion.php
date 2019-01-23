<?php
//Conexion con la base de datos
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

echo "La conexión fue exitosa".PHP_EOL;
echo "<br />";
echo "Información del host:".PHP_EOL;
echo "<br />";
echo mysqli_get_host_info($conexion).PHP_EOL;
echo "<br />";

//Ejecucion de una consulta

$query = "Select * from usuarios";
$result = mysqli_query($conexion, $query);

if($result){
    $fila = mysqli_fetch_array($result);
    print_r($fila);
    echo "<br />";
    echo "Tu usuario ".$fila['usuario']." tiene nombre ".$fila['nombre'];
    echo "<br />";
    $fila = mysqli_fetch_array($result);
    print_r($fila);
}else{
    echo "Error al realizar el query";
    exit;
}

//Cerrar la conexion
mysqli_close($conexion);
?>