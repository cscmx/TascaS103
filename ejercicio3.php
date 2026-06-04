<?php

/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/

function inWord ($word, $character) {
    if (str_contains($word,$character)) {
        return true;
    }

}

$myarray = ["loco", "crono", "vivo"];

foreach ($myarray as $word) {
    echo inWord($myarray,"c");
}

?>