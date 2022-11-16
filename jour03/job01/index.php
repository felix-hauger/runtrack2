<?php

$myArray = [200, 204, 173, 98, 171, 404, 459];

$i = 0;

// continue à boucler tant que l'index de l'array existe après incrémentation
while (isset($myArray[$i])) {
    $number = $myArray[$i];

    if ($number % 2 === 0) {
        echo $number . ' est pair.<br />';
    } else {
        echo $number . ' est impair. <br />';
    }
    $i++;
}