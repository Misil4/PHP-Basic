<?php
$numero = 57;
$divisor = 8;
$cociente = 0;
$resto = 0;

$aux = $numero;
while ($aux >= $divisor) {
  $cociente++;
  $aux -= $divisor;
}
$resto = $aux;

echo $numero , " / " , $divisor , " = " , $cociente ,"(cociente), ", $resto,"(resto)";
?>