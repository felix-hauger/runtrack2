<?php

// Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
// (<br />).
// Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
// et 50 : souligner.
// Afficher “La Plateforme_” à la place de 42.

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