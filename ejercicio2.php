<?php
/*
Fes un programa que tingui un array indexat de 6 elements i després:

Mostri per pantalla la mida de l’array anterior.
Elimini un element de l’array anterior. Comprova que els índexs/claus de l'array estiguin normalitzats(s’han de reorganitzar els seus índexs perquè no hi hagin salts entre índexs).
Mostri per última vegada la mida de l’array i el seu contingut.
*/

$myarray = [1,2,3,4,5,6];

echo "La medida del array es: " .count($myarray).PHP_EOL;

$index = rand(0,count($myarray)-1);
unset($myarray[$index]);
$myarray = array_values($myarray);

echo "La suma total del array es: ".count($myarray) .PHP_EOL;

echo "Los elementos actuales del array son: ".PHP_EOL;
foreach ($myarray as $indice => $number){
    echo "indice: $indice - valor $number".PHP_EOL;
}
?>