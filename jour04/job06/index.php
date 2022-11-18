<?php


echo '<form action="" method="get">
<label for="oddeven">Entrez votre nombre</label>
<input type="number" name="oddeven" id="oddeven">

<input type="submit" value="Pair ou Impair ?">
</form>';

if (empty($_GET["oddeven"])) {
    echo 'Remplissez tous les champs';
} else {
    $number = $_GET["oddeven"];
    
    if ($number % 2 === 0) {
        echo 'Nombre pair';
    } else {
        echo 'Nombre impair';
    }
}


?>


