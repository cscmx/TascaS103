<?php

$guestList1 = ["Juan","Ana","Pedro","Miguel"];
$guestList2 = ["Marta","Paula","Juan", "Ana"];

echo "Guestlist 1: ".PHP_EOL;
print_r ($guestList1).PHP_EOL;

echo "Guestlist 2: ".PHP_EOL;
print_r ($guestList2).PHP_EOL;

echo "Guestlist combined: ".PHP_EOL;
$combinedGuestList = array_merge($guestList1, $guestList2);
print_r ($combinedGuestList);

echo "Unique guestlist: ";
$uniqueGuestList = array_unique($combinedGuestList);
print_r ($uniqueGuestList);


?>