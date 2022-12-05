<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, "select sum(superficie) from etages as superficie_totale");

$row = $query->fetch_all();

?>

<table>
    <thead>
        <tr>
            <th>Superficie totale des étages</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row[0][0] ?></td>
        </tr>
    </tbody>
</table>