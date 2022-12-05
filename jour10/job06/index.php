<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, "select count(id) from etudiants as nb_etudiants");

$row = $query->fetch_all();

?>

<table>
    <thead>
        <tr>
            <th>Nombre d'étudiants</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row[0][0] ?></td>
        </tr>
    </tbody>
</table>