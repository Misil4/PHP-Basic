<?php
// 4.- Declarar una función que muestre la tabla de multiplicar de la siguiente manera:

// 1 * 1 = 1
// 1 * 2 = 2
// ...
// ...
// 8 * 5 = 40
// ...
// 10 * 9 = 90
// 10 * 10 = 100

// Nota: Tiene que aparecer la tabla entera, en LÍNEAS SEPARADAS
// Ejecutar la funciónp
for ( $i = 1; $i < 11; $i++)
   {
       echo "tabla de el ", $i .'<br>';
       for ($j = 0; $j < 11; $j++)
       {
           $bider = $i*$j;
           echo $i, " * ", $j," = ", $bider .'<br/>';
       }
   }
?>