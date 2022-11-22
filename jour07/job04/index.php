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
$num2 = 5;
$operateurs = ['+', '-', '*', '/', '%'];

echo 'premier nombre : ' . $num1 . '<br />';
echo 'second nombre : ' . $num2 . '<br />';

for ($i = 0; isset($operateurs[$i]); $i++) {
    echo $num1 . ' ' . $operateurs[$i] . ' ' . $num2 . ' : ' . calcule($num1, $operateurs[$i], $num2) . '<br />';
}