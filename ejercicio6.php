<?php
// 6. Declarar una función que sume los elementos del siguiente array y devuelva la suma (como VALOR DE RETORNO). 
// A continuación ejecutar la función y mostrar en pantalla: 'Suma: XX"
    $arrayNum = array(1, 23, 34);
    echo "Numeros que componen el array";
for ($i = 0;$i<count($arrayNum);$i++) {
echo '<p>',$arrayNum[$i];
}
echo '<p>' ,"Resultado";
$suma = $arrayNum[0]+$arrayNum[1]+$arrayNum[2];
echo '<br>','<br>',$suma;
?>