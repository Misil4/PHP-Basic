<?php
// 10. Dado un array, declarar una función que recoja el array como argumento y lo ordene de menor a mayor.
// Ejecutar la función y mostrar el array ordenado. 
// Nota: No se pueden utilizar funciones predefinidas de JAVASCRIPT.


$arrayNum1 = array(12, 23, 34, 567, 19, 57);
$numelements = count($arrayNum1);
for ($i = 0; $i < $numelements-1; $i++) {
    for ($j = $i+1; $j < $numelements; $j++) {
        if ($arrayNum1[$i] > $arrayNum1[$j]) {
            $k = $arrayNum1[$i];
            $arrayNum1[$i] =  $arrayNum1[$j];
            $arrayNum1[$j] = $k;
        }
    }
}
for ($i = 0; $i < count($arrayNum1); $i++) {
    echo $arrayNum1[$i]," ";
}
