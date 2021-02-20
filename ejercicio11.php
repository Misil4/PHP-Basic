<?php
// 11. Dado un array con números positivos y negativos, declarar una función que recoja el array como argumento y realice lo siguiente:
// La función deberá crear un array nuevo con los números positivos, ordenarlos de menor a mayor y devolver el array.
// Ejecutar la función y mostrar el array ordenado. 

// Nota: No se pueden utilizar la clase ARRAY ni funciones predefinidas de JAVASCRIPT (PUSH, etc..).
// PISTA: El nuevo array deberá tener una dimensión tal que: Length(nuevo) = Length(viejo) - num_elementos_negativos

$arrayNum1 = array(12, -3, 34, 567, -19, 57, 0);
$berria = array();
for ($i =0;$i<count($arrayNum1);$i++) {
    if ($arrayNum1[$i] >=0) {
       $berria[$i] = $arrayNum1[$i];
    }
}
sort($berria);
print_r($berria);
