<?php
// 5.- Declarar una función que recibe 2 números como parámetros, devuelve el mayor de los dos y si son iguales devuelve un mensaje. 
// Mostrar el resultado de la función
// Ejecutar la función. 
    $num1 = 6;
    $num2 = 5;
    echo "los numeros son " , $num1 , " y " , $num2;
    if ($num1 > $num2) {
       echo '<br>' , "el numero mas grande es " ,  $num1;
    }
    else if ($num1 == $num2) {
        echo '<br>', "son iguales";
    }
    else
        echo '<br>', "el numero mas grande es ", $num2;
