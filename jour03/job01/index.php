<?php

// Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
// Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
// impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
// comprises dans ce tableau.
// Ex. :
// 200 est paire
// 204 est paire
// 173 est impaire
// 98 est paire
// 171 est impaire
// 404 est paire
// 459 est impaire

$myArray = [200, 204, 173, 98, 171, 404, 459];

$i = 0;

// continue à boucler tant que l'index de l'array existe après incrémentation
while (isset($myArray[$i])) {
    $number = $myArray[$i];

    if ($number % 2 === 0) {
        echo $number . ' est pair.<br />';
    } else {
        echo $number . ' est impair.<br />';
    }
    $i++;
}