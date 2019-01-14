<?php
if($_GET and is_numeric($_GET['numero']) and $_GET['numero']>0 and round($_GET['numero'], 0) == $_GET['numero']){
  $num = $_GET['numero'];
  $divisor = 2;
  $primo = true;
  while($primo and $divisor <= ($num/2)){
    if($num % $divisor == 0){
      $primo = false;
    }
    $divisor++;
  }

  if($primo){
    echo "Es primo";
  }else{
    echo "No es primo";
  }
}
?>
<form>
  Ingresa tu numero
  <input type="text" name="numero">
  <input type="submit" value="Evaluar">
</form>
