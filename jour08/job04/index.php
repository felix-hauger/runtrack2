<?php

// Créez un formulaire de connexion qui contient un input de type de text nommé
// “prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
// prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
// plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
// bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
// nouveau afficher le formulaire de connexion.


if (isset($_POST['deco'])) {
    setcookie('firstname', 'firstname', time()+0);
    header('Location: index.php');
}

elseif (isset($_COOKIE['firstname'])) {
    

?>

<h1>Bonjour <?php echo $_COOKIE['firstname'] ?></h1>
<form action="" method="post">
    <button name="deco" type="submit">Déconnexion</button>
</form>

<?php

}

else {

?>
<form action="" method="post">
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname">

    <input type="submit" name="connection" value="Connexion">
</form>


<?php

    if (isset($_POST['firstname'])) {
        setcookie('firstname', $_POST['firstname'], time()+3600);
        header('Location: index.php');
        die();
    }   
}