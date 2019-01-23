<?php
//Tiempo es en segundos
setcookie("usuario", "jgaviria", time()+10);
header("Location: cookie2.php");
?>