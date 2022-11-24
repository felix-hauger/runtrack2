<?php

// Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
// submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
// session. Afficher l’ensemble des prénoms.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.

session_start();

if (isset($_POST['reset'])) {
    $_SESSION['firstnames'] = [];
} elseif (isset($_POST['firstname']) && $_POST['firstname'] != '') {
    $_SESSION['firstnames'][] = $_POST['firstname'];
}

?>

<form action="" method="post">
    <label for="firstname">first name</label>
    <input type="text" name="firstname" id="firstname">
    <input type="submit" name="submit" value="submit">
    <button type="submit" name="reset">reset</button>
</form>

<?php 

echo '<ul>';
if (isset($_SESSION['firstnames'])) {
    foreach ($_SESSION['firstnames'] as $firstname) {
        echo '<li>' . $firstname . '</li>';
    }
}
echo '</ul>';

?>