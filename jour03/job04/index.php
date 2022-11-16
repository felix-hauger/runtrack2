<?php

$str = "Dans l'espace, personne ne vous entend crier";
$nb_char = 0;

$i = 0;

while (isset($str[$i])) {
    $nb_char++;
    $i++;
}

echo $nb_char;
