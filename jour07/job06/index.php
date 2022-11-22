<?php

// Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
// chaîne de caractères nommée “$str”.
// Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
// qu’elle doit la modifier de sorte à ce que :
// ● les “A” deviennent des “4”,
// ● les “B” des “8”,
// ● les “E” des “3”,
// ● les “G” des “6”,
// ● les “L” des “1”,
// ● les “S” des “5”
// ● les “T” des “7”.
// Cela est valable que l’on crie ou non (majuscules et minuscules).

function leetSpeak($str) {

    // array de correspondance entre un leet et tableau de caractères
    $leetArray = [
        '4' => ['a', 'A'],
        '8' => ['b', 'B'],
        '3' => ['e', 'E'],
        '6' => ['g', 'G'],
        '1' => ['l', 'L'],
        '5' => ['s', 'S'],
        '7' => ['t', 'T']
    ];

    // Pour chaque caractère de la chaîne
    for ($i = 0; isset($str[$i]); $i++) {

        // Pour chaque clé de $leetArray qui vaut un leet qui correspond au tableau [min, maj]
        foreach ($leetArray as $leet => $char) {
            
            // S'il vaut la min ou la maj on swap avec le leet
            if ($str[$i] === $char[0] || $str[$i] === $char[1]) {
                $str[$i] = $leet;
            }
        }
    }
    return $str;

}


echo leetSpeak('TATA BELGE') . '<br />';
echo leetSpeak('tata belge') . '<br />';
echo leetSpeak('Anticonstitutionnellement') . '<br />';