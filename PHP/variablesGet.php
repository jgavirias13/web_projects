<?php
header("Content-type: text/html; charset=\"utf-8\"");
echo $_GET['nombre'];
?>
<form>
  Escribe tu nombre
  <input name="nombre" type="text">
  <input type="submit" value="Enviar">
</form>
