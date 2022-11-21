<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :

Argument    Valeur
prenom      Stephane
nom         Dupont -->

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px 10px;
    }
</style>

<h1>Entrez nombres</h1>
<form action="" method="post">
    <label for="day">Jour</label>
    <input type="number" name="day" id="day" min="1" max="31" required>
    
    <label for="month">Mois</label>
    <input type="number" name="month" id="month" min="1" max="12" required>

    <label for="year">Année</label>
    <input type="number" name="year" id="year" required>

    <input type="submit" value="Envoyer">
</form>
 
<?php

// Vérifie si toutes les variables sont envoyées et non vides
if (!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"]) || 
    $_POST["day"] == '' || $_POST["month"] == '' || $_POST["year"] == '') {

    echo 'Remplissez tous les champs !';
} else {
    $table = '<table><thead><tr><th>Argument</th><th>Valeur</th></tr><tbody>';
    
    foreach ($_POST as $argument => $value) {
        $table .= '<tr><td>' . $argument . '</td><td>' . $value . '</td></tr>';
    }
    
    echo $table . '</tbody>';
}

