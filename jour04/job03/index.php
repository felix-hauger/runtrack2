<?php

// Développez un algorithme qui affiche le nombre d’arguments $_POST.
// Tips :
// Pour tester votre code, créez un formulaire html <form> de type POST avec différents
// champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
// Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
// “Le nombre d’argument POST envoyé est : “

echo '<form action="index.php" method="post">
        <label for="mytext">Mon texte</label>
        <input type="text" id="mytext" name="mytext" required>

        <label for="mytext2">Mon texte 2</label>
        <input type="text" id="mytext2" name="mytext2" required>

        <label for="myprettytext">Mon joli texte</label>
        <input type="text" id="myprettytext" name="myprettytext" required>

        <label for="tototext">tototexte</label>
        <input type="text" id="tototext" name="tototext" required>

        <input type="submit" value="Envoyer">
        </form>';

// Vérifie si toutes les variables sont envoyées et non vides
if (!isset($_POST["mytext"]) || !isset($_POST["mytext2"]) || !isset($_POST["myprettytext"]) || !isset($_POST["tototext"]) ||
    $_POST["mytext"] == '' || $_POST["mytext2"] == '' || $_POST["myprettytext"] == '' || $_POST["tototext"] == '') {
    echo 'Remplissez tous les champs !';
} else {
    $count = 0;
    
    foreach ($_POST as $input) {
        $count += 1;
    }
    
    echo 'Le nombre d’arguments POST envoyés est ' . $count;
}


?>



