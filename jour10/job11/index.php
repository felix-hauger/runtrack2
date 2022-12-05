<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, "select avg(capacite) from salles");

$row = $query->fetch_all();

?>

<table>
    <thead>
        <tr>
            <th>Capacité moyenne des salles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row[0][0] ?></td>
        </tr>
    </tbody>
</table>