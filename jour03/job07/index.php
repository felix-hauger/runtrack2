<!-- Job 07
Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c
Rendu
Le projet est à rendre sur https://github.com/prenom-nom/runtrack2.
Dossiers “jourXX” -> “jobXX”. Fichiers nommés index.php
Pensez à donner les droits sur le répertoire à deepthoughtlaplateforme ! -->


<?php

$lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'o', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'O', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$strModified = '';

$strSize = 0;

while (isset($str[$strSize])) {
    $strSize += 1;
}

// On commence à 1 pour ne pas prendre en compte le premier caractère
for ($i = 1; $i < $strSize; $i++) {
    $strModified .= $str[$i];
}

$strModified[$strSize-1] = $str[0];


for ($i = 0; $i < 26; $i++) {
    if ($strModified[0] === $lower[$i]) {
        $strModified[0] = $upper[$i];
    }
    if ($strModified[$strSize-1] === $upper[$i]) {
        $strModified[$strSize-1] = $lower[$i];
    }
}


echo $strModified;