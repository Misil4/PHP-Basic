<?php
// 8. Declarar una función en la que se pase el array siguiente como argumento. A continuación extraiga el elemento mayor y el menor del array, 
// y devuelva la diferencia entre ambos valores. 
// Ejecutar la función y mostrar el resultado.

// Ejemplo: var arrayNum1 = [1, 23, 34];
// La función devolvería 34-1 = 33
$arrayNum1 = array(12, 23, 34, 567, 19, 57);
    $pequeño = $arrayNum1[0];
    $grande = 0;
    for ($i = 0; $i < count($arrayNum1); $i++) {
        if ($arrayNum1[$i] > $grande) {
            $grande = $arrayNum1[$i];
        }
        else if ($arrayNum1[$i] < $pequeño) {
            $pequeño = $arrayNum1[$i];
        }
    }
   echo $pequeño , " es el menor" . '<br>' , $grande , "es el mayor";
?>