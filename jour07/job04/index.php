<?php

// Créez une fonction nommée “calcule()” qui prend 3 paramètres :
// ● le premier, “$a”, est un nombre,
// ● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
// (+, -, *, /, %),
// ● le troisième, “$b”, est un nombre.
// La fonction doit retourner le résultat de l’opération.

function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
        case '%':
            return $a % $b;
    }
}

$num1 = 42;
$num2 = 7;

echo 'premier nombre : ' . $num1;
echo 'second nombre : ' . $num2;


echo $num1 . ' + ' . $num2 . ' : ' . calcule($num1, '+', $num2) . '<br />';
echo $num1 . ' - ' . $num2 . ' : ' . calcule($num1, '-', $num2) . '<br />';
echo $num1 . ' * ' . $num2 . ' : ' . calcule($num1, '*', $num2) . '<br />';
echo $num1 . ' / ' . $num2 . ' : ' . calcule($num1, '/', $num2) . '<br />';
echo $num1 . ' % ' . $num2 . ' : ' . calcule($num1, '%', $num2) . '<br />';