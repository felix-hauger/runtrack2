<?php

for ($i = 1; $i <= 1000; $i++) {
    
    // On commence à 2 car 1 n'est pas un nombre premier
    $j = 2;

    // On fait un 2ème tour de boucle pour compter de 2 au nombre et vérifier s'il y a des multiples
    while ($j <= $i-1) {

        // On teste si le nombre est un multiple du 2ème avec modulo, si oui ce n'est pas un nombre premier et on sort de la boucle
        if ($i % $j === 0) {
            break;
        }
        $j++;
    }

    // Si la boucle s'est terminée sans encombre $j est égal à $i ; $i n'a pas d'autres multiples ; par conséquent il n'est que divisible par lui même
    if ($j === $i) {

        // Pour éliminer les nombres décimaux
        if ($i % 1 === 0) {
            echo $i . '<br />';
        }
    }
}