<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, 'select prenom, nom, naissance, sexe, email from etudiants where datediff(date( now()), naissance) < 6574');

$row = $query->fetch_assoc();

echo '<table><thead><tr>';

foreach ($row as $key => $value) {
    echo '<th>' . $key . '</th>';
}

echo '</tr></thead><tbody>';

while ($row != null) {
    echo '<tr>';

    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }

    echo '</tr>';

    $row = $query->fetch_assoc();
}

echo '</tbody></table>';