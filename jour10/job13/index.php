<?php

$id = mysqli_connect('localhost', 'root', '', 'jour09');

$query = mysqli_query($id, "select salles.nom as NomSalle, etages.nom as NomEtage from salles inner join etages on salles.id_etage = etages.id");

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
    <?php endwhile; ?>
    </tbody>
</table>