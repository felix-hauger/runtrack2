<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, 'select id, nom, id_etage, capacite from salles order by capacite');

$row = $query->fetch_assoc();

?>

<table>
    <thead>
        <tr>
        <?php foreach ($row as $key => $value): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
    <?php while ($row != null): ?>
        <tr>
        <?php foreach ($row as $value): ?>
            <td><?= $value ?></td>
        <?php endforeach; $row = $query->fetch_assoc(); ?>
        </tr>
    <?php endwhile ?>
    </tbody>
</table>