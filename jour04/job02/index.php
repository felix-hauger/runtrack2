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
    <input type="text" name="lastname" id="lastname" >
    
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname" >

    <label for="occupation">Occupation</label>
    <input type="text" name="occupation" id="occupation" >

    <input type="submit" value="Envoyer">
</form>


<?php

// Vérifie si toutes les variables sont envoyées et non vides
if (!isset($_GET["lastname"]) || !isset($_GET["firstname"]) || !isset($_GET["occupation"]) ||
    $_GET["lastname"] == '' || $_GET["firstname"] == '' || $_GET["occupation"] == '') {
    echo 'Remplissez tous les champs !';
} else {
    $table = '<table><thead><tr><th>Argument</th><th>Valeur</th></tr><tbody>';
    
    foreach ($_GET as $argument => $value) {
        $table .= '<tr><td>' . $argument . '</td><td>' . $value . '</td></tr>';
    }
    
    echo $table . '</tbody>';
}

?>