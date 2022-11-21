<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “Dans l'espace, personne ne vous entend crier”.
// Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
// dans cette chaîne.

$str = "Dans l'espace, personne ne vous entend crier";

$nb_char = 0;

while (isset($str[$nb_char])) {
    $nb_char++;
}

echo $nb_char;
