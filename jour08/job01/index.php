<?php

// Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
// visitée, ajoutez 1. Afficher le contenu de cette variable.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.

session_start();


if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] += 1;
} else {
    $_SESSION['nbvisites'] = 1;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

echo 'Nombre de visites : ' . $_SESSION['nbvisites'];

?>

<form action="" method="post">
    <button name="reset" type="submit">reset</button>
</form>