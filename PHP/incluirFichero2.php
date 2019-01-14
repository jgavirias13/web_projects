<?php
//Primera forma
include("incluirFichero.php");

//Segunda forma: incluir un sitio web entero
echo file_get_contents("https://www.google.com");
?>