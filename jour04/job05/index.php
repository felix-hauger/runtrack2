<?php

// Bien entendu, on utilise POST pour ne pas afficher des informations sensibles telles qu'un mot de passe dans l'url

echo '<form action="" method="post">
<label for="username">Utilisateur</label>
<input type="text" name="username" id="username">

<label for="password">Mot de passe</label>
<input type="password" name="password" id="password">

<input type="submit" value="Connexion">
</form>';

// Vérifie si toutes les variables sont envoyées et avec les identifiants corrects. Sinon...
if (!isset($_POST["username"]) || $_POST["username"] !== 'John' || !isset($_POST["password"]) || $_POST["password"] !== 'Rambo') {
    echo 'Votre pire cauchemar';
} else {
    echo 'C\'est pas ma guerre';
}

?>

