<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, 'select nom, capacite from salles');

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