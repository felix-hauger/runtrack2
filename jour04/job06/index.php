<?php

// Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
// bouton submit.
// Après validation du formulaire :
// ● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
// ● si c’est un nombre impair, afficher “Nombre impair”.

echo '<form action="" method="get">
<label for="oddeven">Entrez votre nombre</label>
<input type="number" name="oddeven" id="oddeven">

<input type="submit" value="Pair ou Impair ?">
</form>';

if (!isset($_GET["oddeven"]) || $_GET["oddeven"] == '') {
    echo 'Remplissez tous les champs';
} else {
    $number = $_GET["oddeven"];
    
    if ($number % 2 === 0) {
        echo 'Nombre pair';
    } else {
        echo 'Nombre impair';
    }
}


?>


