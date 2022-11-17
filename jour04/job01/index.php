<?php

var_dump($_GET);

$count = 0;

foreach($_GET as $input) {
    $count+=1;
}

echo 'Le nombre d’argument GET envoyé est : ' . $count;

?>


<form action="index.php" method="get">
    <label for="mytext">Mon texte</label>
    <input type="text" id="mytext" name="mytext">

    <!-- <label for="mytext2">Mon texte 2</label>
    <input type="text" id="mytext2" name="mytext2"> -->

    <input type="submit" value="Envoyer">
</form>