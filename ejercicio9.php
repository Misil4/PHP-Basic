<?php
// 9. Se dan dos números en forma de array. Se trata de declarar una función que los recoja como argumento, los sume y devuelva el array con el número SUMA.
// Ejemplo: 123 = [1,2,3]
//          458 = [4,5,6]
//   SUMA:  581 = [5,8,1]
// 
// NOTA: Por simplicidad los dos arrays deberán tener la misma dimensión. 
// PISTA: La dimensión del array de devolución sera la dimensión de los arrays de entrada + 1. Además, habrá que tener en cuenta el acarreo (la llevada). 
// Se trata de SUMAR TAL Y COMO LO HARÍAIS EN PAPEL, de derecha a izquierda.
// 

//Ejecutaremos la función y sacaremos en pantalla un texto en la forma: '123 + 458 = 581' (En el caso del ejemplo)

//Podéis hacer pruebas con diferentes números. Como ejemplo se dan los números 976 y 385. 
        $elements = 3;
        $array = array(6,8,2);
        $array1 = array(4,7,9);
        $array2 = array();
        $llevada = 0;
        $sumcifra = 0;
        $resto = 0;
        for ($i =$elements-1 ; $i >=0; $i--) {
            $sumcifra = $array[$i] + $array1[$i]+$llevada;
            $llevada = $sumcifra / 10;
            $resto = $sumcifra % 10;
            $array2[$i + 1] = $resto;
            $array2[0] = $llevada;
        }
        for ($i = 0;$i<count($array2);$i++ ) {
            echo $array2[$i];
            break;
        }
        ?>
