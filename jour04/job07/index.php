<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #container {
        margin-left: 300px;
        margin-top: 300px;
    }
</style>


<?php

$nb_width = 40;
$nb_height = 15;

$triangle = '';



// for ($j = $nb_width/2; $j > 1; $j--) {
//     $left_spaces = 'y' . $left_spaces ;
// }

/*
$dic = [
    "interieur" => [],
    "espace" => []
];
*/


$ligne = "";

$liste_de_ligne = [];


$index_liste = 0;
$espace = "";

for ($remplissage = $nb_width; $remplissage >= 0 ; $remplissage -= 2) {
    
    // $dic["remplissage"] = $num;
    // $dic["espace"] += 1;


    for ($i=0; $i < $remplissage; $i++) {
        $char = ($i == ($remplissage - 1)) ? "\\" : "X";

        if ($i == 0) {
            $char = "/";
        }

        $ligne .= $char;
    }


    $liste_de_ligne[$index_liste] = $espace . $ligne;


    $ligne = "";


    $index_liste += 1;
    $espace .= "&nbsp;";



    echo "espace => --$espace--<br>";
    

    // echo "ir => $ir & espace => $espace";
}


print_r($liste_de_ligne);



foreach($liste_de_ligne as $ligne) {
    echo $ligne;
    $triangle = $ligne . '<br>' . $triangle;
}


// for ($c = 0; $c < $index_liste; $c++) {
//     $li = $liste_de_ligne[$c];

//     echo "c => $c &     index_liste - 2 => " . ($index_liste - 1) . "<br>";

//     if ($c === ($index_liste - 1)) {
//         echo "love";
//         $triangle = $ligne .  $triangle;
//     } else {
//         $triangle = $ligne . '<br>' . $triangle;
//     }
// }



// for ($i = 1; $i < $nb_width; $i++) {
//     // var_dump($left_side);
//     $k = $nb_height - $i;
//     echo "k : $k <br>";
//     for ($j = $k; $j > 0; $j--) {
//         // var_dump($j);
//         echo "j : $j <br>";
//         // $left_spaces = ($k-$j);
//         // var_dump($left_spaces);
//         $left_side = 'x' . $left_side;
//     }
//     $triangle .= $left_side.'<br>';
//     if ($i % 2 === 0) {
        

        
//         // $left_side .= $left_spaces . '<br>';
//     }
    
//     if ($i > 1) {
//         if ($i !== $nb_width-1) {
//             $triangle_width .= '_';
//         } else {
//             $triangle_width .= '\\';
//         } 
//     } else {
//         $triangle_width = '/' . $triangle_width;
//     }
//     // $triangle .= le

// }

// --------- RECTANGLE -----------

$rectangle = '';

for ($i = 0; $i < $nb_height; $i++) {

    for ($j = 0; $j < $nb_width; $j++) {

        // Si ce n'est pas un côté du rectangle
        if ($j !== 0 && $j !== $nb_width-1) {

            // Si ce n'est pas la base du rectangle, ajouter un espace
            if ($i !== $nb_height-1) {
                $rectangle .= 'x';

            // Sinon ajouter des underscores pour la base
            } else {
                $rectangle .= '_';
            }

        // Sinon c'est un côté du rectangle, et on ajoute des pipes
        } else {
            $rectangle .= '|';
        }
    }
    $rectangle .= '<br>';
    // $rectangle = $rectangle_width;
    // var_dump($rectangle);
}


?>

<div id="container">
    <?php echo '<pre>' . $triangle . $rectangle . '</pre>'; ?>
</div>

