<?php

echo '<form action="index.php" method="get">
<label for="mytext">Mon texte</label>
<input type="text" id="mytext" name="mytext" required>

<label for="mytext2">Mon texte 2</label>
<input type="text" id="mytext2" name="mytext2" required>

<label for="myprettytext">Mon joli texte</label>
<input type="text" id="myprettytext" name="myprettytext" required>

<input type="submit" value="Envoyer">
</form>';

// Vérifie si toutes les variables sont envoyées et non vides
if (!isset($_GET["mytext"]) || !isset($_GET["mytext2"]) || !isset($_GET["myprettytext"]) ||
    $_GET["mytext"] == '' || $_GET["mytext2"] == '' || $_GET["myprettytext"] == '') {
    echo 'Remplissez tous les champs !';
} else {
    $count = 0;

    foreach($_GET as $input) {
        $count+=1;
    }
    
    echo 'Le nombre d’argument GET envoyé est : ' . $count;
}



?>


