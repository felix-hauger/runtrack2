<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “I'm sorry Dave I'm afraid I can't do that”.
// Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
// Ex. : IoyaeIaaiIaoa

$str = "I'm sorry Dave I'm afraid I can't do that";

$vowels = 'aeiouyAEIOUY';
$vowel_str = '';

$i = 0;

// Tant qu'il y a des caractères dans la string
while (isset($str[$i])) {
    $char = $str[$i];

    // Si le caractère correspond à une voyelle, on l'ajoute dans la string $vowel_str
    for ($v = 0; $v < 12; $v++) {
        
        if ($char === $vowels[$v]) {
            $vowel_str .= $char;
            break;
        }
    }
    $i++;
}

echo $vowel_str;

