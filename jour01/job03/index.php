<?php

$boolean1 = true;
$boolean2 = false;

$string1 = "toto";
$string2 = "tata";

$int1 = 69;
$int2 = 42;

$float1 = 1.7;
$float2 = 99.9;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>Boolean</td>
                <td>boolean1</td>
                <td><?php echo $boolean1 ?></td>
            </tr>
            <tr>
                <td>String</td>
                <td>string1</td>
                <td><?php echo $string1 ?></td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>int1</td>
                <td><?php echo $int1 ?></td>
            </tr>
            <tr>
                <td>Float</td>
                <td>float1</td>
                <td><?php echo $float1 ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>