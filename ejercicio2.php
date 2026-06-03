<?php

$myarray = [1,2,3,4,5,6];

echo count($myarray);
$index = rand(0,count($myarray));

unset($myarray[$index]);

echo count($myarray);

foreach ($myarray as $number){
    echo $number.PHP_EOL;
}
?>