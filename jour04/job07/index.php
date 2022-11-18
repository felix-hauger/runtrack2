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


// --------------- TRIANGLE ---------------

$triangle = '';


$ligne = "";

$liste_de_ligne = [];


$index_liste = 0;
$espace = "";


// Va servir à créer la surface du triangle
for ($remplissage = $nb_width; $remplissage >= 0 ; $remplissage -= 2) {


    for ($i=0; $i < $remplissage; $i++) {
        
        // remplace le 1er caract-re par \
        $char = ($i == ($remplissage - 1)) ? "\\" : "X";

        // Remplace le dernier caractère par \
        if ($i == 0) {
            $char = "/";
        }

        $ligne .= $char;
    }

    // ajoute la ligne créée ci-dessus au tableau $liste_de_lignes
    $liste_de_ligne[$index_liste] = $espace . $ligne;


    $ligne = "";


    $index_liste += 1;
    $espace .= "&nbsp;";



    // echo "espace => --$espace--<br>";
    
}


print_r($liste_de_ligne);


// dessine le triangle à l'aide du tableau
foreach($liste_de_ligne as $ligne) {
    echo $ligne;
    $triangle = $ligne . '<br>' . $triangle;
}


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

}


?>

<div id="container">
    <?php echo '<pre>' . $triangle . $rectangle . '</pre>'; ?>
</div>

