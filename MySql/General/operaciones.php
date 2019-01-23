<?php
//Operaciones sobre base de datos
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

//Nuevo usuario en la base de datos
/*
$query = "Insert into usuarios (usuario, nombre) values ('miguerxn', 'Miguel Gaviria Salazar')";
$result = mysqli_query($conexion, $query);
if(!$result){
    echo "Error al realizar la insercion";
    exit;
}
*/

//Actualizar usuario en la base de datos
/*
$query = "Update usuarios set usuario='miguelgs' where usuario = 'miguerxn' limit 1";
$result = mysqli_query($conexion, $query);
if(!$result){
    echo "Error al realizar la actualizacion";
    exit;
}
*/
?>