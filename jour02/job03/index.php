<?php

for ($i = 0; $i <= 100; $i++) {

    if ($i <= 20) {
        echo '<i>' . $i . '</i>';

    } else if ($i >= 25 && $i <= 50) {
        // Imbrication du résultat dans la balise <u> pour souligner
        echo '<u>';

        // Condition dans la condition  pour souligner 'La Plateforme_
        if ($i === 42) {
            echo 'La Plateforme_';
        } else {
            echo $i;
        }

        echo '</u>';
        
    } else {
        echo $i;
    }
    echo '<br />';
}