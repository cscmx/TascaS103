<?php

/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/

$myArray = ["hola", "Php", "Html"];
$findMe = "l";

echo "BUSCANDO: ". $findMe.PHP_EOL;

function searchingChar (string $word, string $chartofind) {

    return str_contains($word, $chartofind);

}

function searchingInArray (array $anArray, string $aLetter){
    foreach($anArray as $word) {
        $word = strtolower($word);
        if (!searchingChar($word, $aLetter)){
            return false;
        }
    }
    return true;
}


if (searchingInArray($myArray, $findMe)){
    echo "$findMe está en la palabra";
} else {
    echo "$findMe no está en la palabra";
}


?>