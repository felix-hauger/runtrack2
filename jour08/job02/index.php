<?php

// Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
// Afficher le contenu du cookie.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.


setcookie('nbvisites', '0', time()+3600);


if (isset($_POST['reset'])) {
    setcookie('nbvisites', '0', time()+3600);
    // Redirige vers index.php pour recharger et prendre en compte les modifications des visites
    header('Location: index.php');

} elseif (isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', (int) $_COOKIE['nbvisites'] + 1, time()+3600);

} else {
    setcookie('nbvisites', '1', time()+3600);
    header('Location: index.php');

}

echo 'Nombre de visites : ' . $_COOKIE['nbvisites'];

?>

<form action="" method="post">
    <button name="reset" type="submit">reset</button>
</form>