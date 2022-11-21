<!-- Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”.. -->


<style>
    table, td {
        border: 1px solid;
    }
</style>

<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z',
              'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y',
             'A', 'E', 'I', 'O', 'U', 'Y'];



$dic = [
    'consonnes' => 0,
    'voyelles' => 0
];


$i = 0;

while (isset($str[$i])) {
    $char = $str[$i];
    // va servir à savoir si on a besoin de chercher parmi les consonnes, au cas où il n'y a pas de match parmi les voyelles
    $isNotDefined = true;

    // S'il y a un match, on ajoute +1 au compte des voyelles, on passe $isNotDefined à false pour ne pas lancer la boucle suivante et on break
    foreach($voyelles as $voyelle) {
        if ($char === $voyelle) {
            $dic['voyelles'] += 1;
            $isNotDefined = false;
            break;
        }
    }
    
    //  S'il n'y a pas eu de match pour les voyelles, on boucle
    if ($isNotDefined) {
        // S'il y a un match, on ajoute +1 au compte des consonnes et on break
        foreach($consonnes as $consonne) {
            if ($char === $consonne) {
                $dic['consonnes'] += 1;
                break;
            }
        }
    }
    $i++;
}

$htmlTable = '<table>
                <thead>
                    <tr>
                        <td>Consonnes</td>
                        <td>Voyelles</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$dic['consonnes'].'</td>
                        <td>'.$dic['voyelles'].'</td>
                    </tr>
                </tbody>
                </table>';

echo $htmlTable;

?>

