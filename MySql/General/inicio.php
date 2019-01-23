<?php
session_start();

if($_SESSION['username']){
    echo "<p>Hola ".$_SESSION['username'].", como estas?";
}else{
    echo "<p>No has iniciado sesion</p>";
}
?>