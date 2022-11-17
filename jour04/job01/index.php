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


if (empty($_GET["mytext"]) || empty($_GET["mytext2"]) || empty($_GET["myprettytext"])) {
    echo 'Remplissez tous les champs !';
} else {
    $count = 0;

    foreach($_GET as $input) {
        $count+=1;
    }
    
    echo 'Le nombre d’argument GET envoyé est : ' . $count;
}



?>


