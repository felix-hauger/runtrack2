<?php

// Dans le fichier runtrack2/jour01/job01, créer un fichier index.php.
// Dans ce fichier, créez une variable nommée str. Affectez lui la valeur
// “LaPlateforme”. Affichez le contenu de la variable str. Créez une variable str2
// contenant “Vive” et une variable str3 contenant “!”.
// Affichez “Vive LaPlateforme !” en concaténant l’ensemble de ces variables.
// ● Créez une variable nommée val. Affectez à cette variable la valeur 6.
// Affichez le contenu de la variable. Ajoutez 4 à cette variable. Affichez à nouveau
// le contenu.
// ● Créez une variable myBool, affectez à cette variable true, affichez le contenu de
// la variable. Affectez false à la variable et affichez à nouveau le contenu



// strings
$str = "LaPlateforme";
echo $str;

$str2 = 'Vive';
$str3 = '!';

// sauts de lignes
echo '<br>';

echo "$str2 $str $str3";

echo '<br><br>';


// ints

$val = 6;

echo $val;

echo '<br>';

$val = $val + 4;

echo $val;

echo '<br><br>';


// booleans

$myBool = true;

echo $myBool;

echo '<br>';

$myBool = false;

// false ne s'affiche pas dans le navigateur
echo $myBool;