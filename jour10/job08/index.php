<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, "select sum(capacite) from salles as capacite_totale");

$row = $query->fetch_all();

?>

<table>
    <thead>
        <tr>
            <th>Capacité totale des salles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row[0][0] ?></td>
        </tr>
    </tbody>
</table>