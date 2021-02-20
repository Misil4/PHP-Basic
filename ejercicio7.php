<?php
// 7. Declarar una función que sume cada elemento del primer array con cada elemento del segundo (en la misma posición) y devuelva el array con la suma de ambos.
// A continuación ejecutar la función y mostrar en pantalla el array de la Suma al completo.  
     $arrayNum1 = array(1, 23, 34);
     $arrayNum2 = array(6, 7, 50);
        $suma1  = $arrayNum1[0]+$arrayNum2[0];
        $suma2 = $arrayNum1[1]+$arrayNum2[1];
        $suma3  = $arrayNum1[2]+$arrayNum2[2];
        echo "los resultados son: ".'<br>',$arrayNum1[0],"+",$arrayNum2[0],"=",$suma1.'<br>',$arrayNum1[1],"+",$arrayNum2[1],"=",$suma2.'<br>',$arrayNum1[2],"+",$arrayNum2[2],"=",$suma3.'<br>';
?>