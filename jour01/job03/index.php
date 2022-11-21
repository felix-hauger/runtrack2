<?php

// Dans le dossier runtrack2/jour01/job03, créez un fichier index.php.
// En PHP, il existe différents types de variables. Créez des variables de types primitifs
// (boolean, entier, chaîne de caractères, nombre à virgule flottante) et affectez-y des
// valeurs.
// A l’aide de php, générer un tableau html qui contient dans son header trois colonnes
// (type, nom, valeur) et dans son body, une ligne pour chacune des variables et de leurs
// informations.

$boolean1 = true;
$boolean2 = false;

$string1 = "toto";
$string2 = "tata";

$int1 = 69;
$int2 = 42;

$float1 = 1.7;
$float2 = 99.9;



echo "<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>Boolean</td>
                <td>boolean1</td>
                <td>$boolean1</td>
            </tr>
            <tr>
                <td>String</td>
                <td>string1</td>
                <td>$string1</td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>int1</td>
                <td>$int1</td>
            </tr>
            <tr>
                <td>Float</td>
                <td>float1</td>
                <td>$float1</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
";