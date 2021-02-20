<?php
// 3.- Declarar una función que muestre los números impares de 0 a 100. Mostrar el resultado de la función
// Ejecutar la función. 
    for ($contador = 0;$contador<=100;$contador++) {
    if ($contador%2!=0) {
        echo $contador ,' es impar';
    }
}
?>