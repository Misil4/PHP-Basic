
<?php

// Basándose en el ejercicio de JavaScript ejercicio9.js (Cálculo de suma con llevada de dos números almacenados en arrays) realizar lo siguiente:
// Resta con llevada de los siguientes números: 412 - 284 = 128

$elements = 3;
$array = array(4, 1, 2);
$array1 = array(2, 8, 4);
$array2 = array();
$llevada = 0;
$resta = 0;
for ($i = $elements - 1; $i >= 0; $i--) {
    if ($array[$i] - $llevada >= $array1[$i]) {
        $resta = $array[$i] - $array1[$i] - $llevada;
        $llevada = 0;
    } else {
        $resta = 10 + $array[$i] - $array1[$i] - $llevada;
        $llevada = 1;
    }
    $array2[$i] = $resta;
}
for ($i = 0; $i < count($array2); $i++) {
    echo $array2[$i];
}
