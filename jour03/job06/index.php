<?php

$str = "Les choses que l'on possède finissent par nous posséder.";

$strSize = 0;

// Récupère la taille de la string
while (isset($str[$strSize])) {
    $strSize+=1;
}

// Parcourt la string à l'envers
for ($i = $strSize; $i >= 0; $i--) {
    echo $str[$i];
}

?>
