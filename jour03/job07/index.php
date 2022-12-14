<!--
Job 07
Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c
-->


<?php

// Les alphabets pour swap la casse
$lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'o', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'O', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$strModified = '';

$strSize = 0;

// On récupère la taille de la string
while (isset($str[$strSize])) {
    $strSize += 1;
}

// On commence à 1 pour ne pas prendre en compte le premier caractère...
for ($i = 1; $i < $strSize; $i++) {
    $strModified .= $str[$i];
}

// ... puis on place le premier à la fin de la chaîne
$strModified[$strSize-1] = $str[0];

// La string est maintenant décalée vers la gauche, avec l'ancien premier caractère à la fin !

// Pour toutes les lettres de l'alphabet
for ($i = 0; $i < 26; $i++) {
    // On swap le premier caractère par sa majuscule...
    if ($strModified[0] === $lower[$i]) {
        $strModified[0] = $upper[$i];
    }
    // ... puis le dernier par sa minuscule
    if ($strModified[-1] === $upper[$i]) {
        $strModified[-1] = $lower[$i];
    }
}


echo $strModified;