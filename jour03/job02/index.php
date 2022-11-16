<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$i = 0;

// continue à boucler tant que l'index de l'array existe après incrémentation
while (isset($str[$i])) {
    echo $str[$i];
    $i += 2;
}