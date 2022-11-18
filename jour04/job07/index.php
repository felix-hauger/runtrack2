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

$nb_width = 10;
$nb_height = 5;

$left_side = '/';
$rectangle = '';
$triangle_width = '';

// for ($i = 0; $i < $nb_width; $i++) {
//     if ($i % 2 === 0) {
//         $left_side = ' ' . $left_side;
//     }
    
//     if ($i > 0) {
//         if ($i !== $nb_width-1) {
//             $triangle_width .= '_';
//         } else {
//             $triangle_width .= '\\';
//         } 
//     } else {
//         $triangle_width = '/' . $triangle_width;
//     }

// }

// --------- RECTANGLE -----------

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
    var_dump($rectangle);
}


?>

<div id="container">
    <?php echo '<pre>' . $rectangle . '</pre>'; ?>
</div>

