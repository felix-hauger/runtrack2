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
    $isNotDefined = true;

    foreach($voyelles as $voyelle) {
        if ($str[$i] === $voyelle) {
            $dic['voyelles'] += 1;
            $isNotDefined = false;
            break;
        }
    }
    
    if ($isNotDefined) {
        foreach($consonnes as $consonne) {
            if ($str[$i] === $consonne) {
                $dic['consonnes'] += 1;
                $isNotDefined = false;
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

