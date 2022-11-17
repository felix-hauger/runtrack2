<?php

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

        
if (empty($_POST["mytext"]) || empty($_POST["mytext2"]) || empty($_POST["myprettytext"]) || empty($_POST["tototext"])) {
    echo 'Remplissez tous les champs !';
} else {
    $count = 0;
    
    foreach ($_POST as $input) {
        $count += 1;
    }
    
    echo 'Le nombre d’arguments POST envoyés est ' . $count;
}


?>



