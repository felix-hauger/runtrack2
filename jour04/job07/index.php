<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #container {
        margin: 100px;
    }
</style>


<?php

echo '<form action="" method="get">
<label for="height">Hauteur</label>
<input type="number" name="height" id="height">

<label for="width">Largeur</label>
<input type="number" name="width" id="width">

<input type="submit" value="Bâtissez votre maison!">
</form>
';

if (!isset($_GET['height']) || $_GET['height'] == '' || !isset($_GET['width']) || $_GET['width'] == '') {
    echo 'Remplissez tous les champs !';
} else {


    $nb_width = $_GET['width'];
    $nb_height = $_GET['height'];


    // --------------- TRIANGLE ---------------

    $triangle = '';


    $line = '';

    $line_list = [];

    // Va servir à ajouter les lignes du triangle au tableau $line_list, dans l'ordre
    $list_index = 0;

    $spaces = "";


    // Va servir à créer la surface du triangle, on part de la base et on enlève 1 de chaque côté, donc -2
    for ($surface = $nb_width; $surface >= 0 ; $surface -= 2) {


        for ($i=0; $i < $surface; $i++) {
            
            // Ternaire : les côtés seront / & \ et le reste sera _
            $char = ($i == ($surface - 1)) ? "\\" : (($i == 0) ? $char = "/" : "_");

            $line .= $char;
        }

        // Ajoute la ligne créée ci-dessus au tableau $line_list
        $line_list[$list_index] = $spaces . $line;

        // On reset la variable $line pour le tour suivant
        $line = "";


        $list_index += 1;
        $spaces .= "&nbsp;";

        
    }


    // dessine le triangle à l'aide du tableau
    foreach($line_list as $line) {
        $triangle = $line . '<br>' . $triangle;
    }


    // --------- RECTANGLE -----------

    $rectangle = '';

    for ($i = 0; $i < $nb_height; $i++) {

        for ($j = 0; $j < $nb_width; $j++) {

            // Si ce n'est pas un côté du rectangle
            if ($j !== 0 && $j !== $nb_width-1) {

                // Si ce n'est pas la base du rectangle, ajouter un spaces
                if ($i !== $nb_height-1) {
                    $rectangle .= '&nbsp;';

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

    echo '<div id="container"><pre>' . $triangle . $rectangle . '</pre></div>';



}


?>