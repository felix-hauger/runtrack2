<?php

echo '<form action="" method="post">
<label for="username">Utilisateur</label>
<input type="text" name="username" id="username">

<label for="password">Mot de passe</label>
<input type="password" name="password" id="password">

<input type="submit" value="Connexion">
</form>';

if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo 'Remplissez tous les champs !';
} else {
    if ($_POST["username"] !== "John" || $_POST["password"] !== "Rambo") {
        echo 'Votre pire cauchemar';
    } else {
        echo 'C\'est pas ma guerre';
    }
}

?>

