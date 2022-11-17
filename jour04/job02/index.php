
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px 10px;
    }
</style>


<form action="" method="get">
    <label for="lastname">Nom de Famille</label>
    <input type="text" name="lastname" id="lastname" require>
    
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname" w>

    <label for="occupation">Occupation</label>
    <input type="text" name="occupation" id="occupation">

    <input type="submit" value="Envoyer">
</form>


<?php

$table = '<table><thead><tr><th>Argument</th><th>Valeur</th></tr><tbody>';

foreach ($_GET as $argument => $value) {
    $table .= '<tr><td>' . $argument . '</td><td>' . $value . '</td></tr>';
}

echo $table . '</tbody>';



?>