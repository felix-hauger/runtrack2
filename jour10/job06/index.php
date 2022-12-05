<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, "select count(id) from etudiants as nb_etudiants");

$row = $query->fetch_assoc();

echo '<table><thead><tr><th>Nombre d\'étudiants</th></tr></thead><tbody>';

foreach ($row as $value) {
    echo '<td>' . $value . '</td>';
}

echo '</tbody></table>';