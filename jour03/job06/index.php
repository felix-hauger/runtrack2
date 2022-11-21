<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “Les choses que l'on possède finissent par nous posséder."
// Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
// Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL

$str = "Les choses que l'on possede finissent par nous posseder.";

$strSize = 0;

// Récupère la taille de la string
while (isset($str[$strSize])) {
    $strSize+=1;
}

// Parcourt la string à l'envers
for ($i = $strSize-1; $i >= 0; $i--) {
    echo $str[$i];
}

?>
