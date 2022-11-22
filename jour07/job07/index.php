<?php

// Créez un formulaire <form> qui contient :
//     ● un champ <input> nommé “str” de type “text”,
//     ● une liste déroulante <select> nommée “fonction”
//     ● un bouton <button> submit.
//     Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
//     fonction de l’option <option> choisie dans la liste déroulante.
//     Les choix possibles sont :
//     ● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
//     mettant en gras (<b>) les mots commençant par une lettre majuscule.
//     ● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
//     (qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
//     chaque caractère d’un nombre égal à “$decalage”.
//     ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
//     “c”.
//     ● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
//     Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.

?>

<!-- <form action="" method="post">
    <label for="str">Entrez votre texte</label>
    <input type="text" name="str" id="str">
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">Cesar</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <button type="submit">Envoyez</button>
</form> -->

<?php 

// $allInputsFilled = false;

// foreach ($_POST as $input) {
//     var_dump($input);
//     if (!isset($input) || $input == '') {
//         echo 'Remplissez tous les champs !';
//         break;
//     } else {
//         $allInputsFilled = true;
//     }
// }

echo '<br>';

function getStringLength($str) {
    $strSize = 0;
    
    while (isset($str[$strSize])) {
        $strSize++;
    }

    return $strSize;
}

echo getStringLength('toto caca') . '<br />';

function splitString($str, $separator = ' ') {
    $string = '';
    $stringArray = [];
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] === $separator) {
            $stringArray[] = $string;
            $string = '';
        } else {
            $string .= $str[$i];
        }
        // var_dump($string);
        // var_dump($stringArray);
    }
    $stringArray[] = $string;

    return $stringArray;
}

var_dump(splitString('toto caca sqdqsdxcw dze       '));

//     ● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
//     mettant en gras (<b>) les mots commençant par une lettre majuscule.
function gras($str) {
    $low_to_up = ['a' => 'A', 'b' => 'B', 'c' => 'C', 'd' => 'D', 'e' => 'E', 'f' => 'F', 'g' => 'G', 'h' => 'H', 'i' => 'I', 'j' => 'J', 'k' => 'K', 'l' => 'L', 'm' => 'M', 'o' => 'O', 'n' => 'N', 'p' => 'P', 'q' => 'Q', 'r' => 'R', 's' => 'S', 't' => 'T', 'u' => 'U', 'v' => 'V', 'w' => 'W', 'x' => 'X', 'y' => 'Y', 'z' => 'Z'];

    foreach($low_to_up as $low => $up) {
        if ($str[0] === $low) {
            $str[0] = $up;
        }
    }

    return '<b>' . $str . '</b>';
}

echo gras('toto');

echo '<br>';

//     ● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
//     (qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
//     chaque caractère d’un nombre égal à “$decalage”.
//     ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
//     “c”.

function cesar($str, $decalage = 2) {
    $lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'o', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'O', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    
    for ($i = 0; isset($str[$i]); $i++) {
        for ($j = 0; $j < 26; $j++) {
            if ($str[$i] === $lower[$j]) {
                // Le modulo 26 permet de revenir au début de l'alphabet
                $str[$i] = $lower[($j + $decalage) % 26];
                break;
            } else if ($str[$i] === $upper[$j]) {
                $str[$i] = $upper[($j + $decalage) % 26];
                break;
            }
        }
    }

    return $str;
}

echo cesar('abcde') . '<br />';
echo cesar('vwxy z') . '<br />';
echo cesar('ABCdsq dDE', 1) . '<br />';
echo cesar('VWX dsqd YZ', 8) . '<br />';

echo '<br>';

//     ● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
//     Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.

function plateforme($str) {
    $newStr = '';
    // fonction qui va séparer une string en un array, par défaut le séparateur est un espace ' '
    $strArray = splitString($str);

    // pour chaque string de l'array
    foreach ($strArray as $string) {

        // On récupère la taille avec la fonction créée plus tôt...
        $strSize = getStringLength($string);
        
        // ...pour vérifier si la string fait bien au moins 2 caractères...
        if ($strSize >= 2) {
            // ...et si elle se termine par me
            if ($string[$strSize-2] === 'm' && $string[$strSize-1] === 'e') {
                $string .= '_';
            }
        }
        $newStr .= $string . ' ';

    }

    return $newStr;

}

echo plateforme('centime e meme    tome wololo me m e  ');

?>