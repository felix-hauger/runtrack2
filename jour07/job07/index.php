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

<form action="" method="post">
    <label for="str">Entrez votre texte</label>
    <input type="text" name="str" id="str">
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">Cesar</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <button type="submit">Envoyez</button>
</form>

<?php 

$allInputsFilled = false;

foreach ($_POST as $input) {
    var_dump($input);
    if (!isset($input) || $input == '') {
        echo 'Remplissez tous les champs !';
        break;
    } else {
        $allInputsFilled = true;
    }
}

echo '<br>';

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


function cesar($str) {

}

echo '<br>';

function plateforme($str) {
    $strSize = 0;
    while (isset($str[$strSize])) {
        $strSize++;
    }

    if ($str[$strSize-2] === 'm' && $str[$strSize-1] === 'e') {
        $str .= '_';
    }

    return $str;

}

echo plateforme('centime');

?>