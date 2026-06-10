<?php
/*
Imagina que tens dues llistes de convidats(representats/es únicament per noms). Fes un programa que et retorni:

1) La llista de convidats en comú entre les dues llistes.
/SOLO LOS QUE SON IGUALES EN AMBAS LISTAS
2) La mescla de la llista de convidats(sense repeticions).
/SACAR LOS REPETIDOS
3) La llista de convidats exclusius de la primera llista.
/QUITAR LOS QUE ESTÁN EN AMBAS LISTAS
4) La llista de convidats exclusius de la segona llista.
/QUITAR LOS QUE ESTÁN EN AMBAS LISTAS

*/

$guestList1 = ["Juan","Ana","Pedro","Miguel"];
$guestList2 = ["Marta","Paula","Juan", "Ana"];
$commonGuests = [];


echo "Common guests: ".PHP_EOL;
$commonGuests = array_intersect($guestList1,$guestList2);
print_r($commonGuests).PHP_EOL;


echo "Unique guestlist: ";
$uniqueGuestList = array_unique(array_merge($guestList1,$guestList2));
print_r ($uniqueGuestList).PHP_EOL;


echo "Exclusive Guestlist 1: ".PHP_EOL;
$exclusiveGuestList1 = array_diff($guestList1,$commonGuests);
print_r($exclusiveGuestList1).PHP_EOL;


echo "Exclusive Guestlist 2: ".PHP_EOL;
$exclusiveGuestList2 = array_diff($guestList2,$commonGuests);
print_r($exclusiveGuestList2).PHP_EOL;


?>
