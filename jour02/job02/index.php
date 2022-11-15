<?php

for ($i = 0; $i <= 1337; $i++) {
    // La boucle n'arrivera jamais jusqu'à 3233 mais bon...
    if ($i !== 26 && $i !== 37 && $i !== 88 && $i !== 1111 && $i !== 3233 ) {
        echo $i . '<br />';
    }
}