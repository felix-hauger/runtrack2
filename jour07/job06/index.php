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
    $leetArray = [
        '4' => ['a', 'A'],
        '8' => ['b', 'B'],
        '3' => ['e', 'E'],
        '6' => ['g', 'G'],
        '1' => ['l', 'L'],
        '5' => ['s', 'S'],
        '7' => ['t', 'T']
    ];

    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($leetArray as $leet => $char) {
            if ($str[$i] === $char[0] || $str[$i] === $char[1]) {
                $str[$i] = $leet;
            }
        }
    }
    return $str;

}


echo leetSpeak('TATA BELGE') . '<br />';
echo leetSpeak('Tata Belge') . '<br />';
echo leetSpeak('Anticonstitutionnellement') . '<br />';