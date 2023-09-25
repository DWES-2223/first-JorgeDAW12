<?php
$nom = "Jorge";
$primerCognom = "Hernández";
$segonCognom = "Mataix";
$email = "jorgehernandezmataix@gmail.com";
$anyNaixement = 2003;
$telefon = 612345789;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 202</title>
</head>
<body>
<table class="default">
    <tr>
        <td>Nom</td>
        <td><?php echo $nom ?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?php echo $primerCognom . $segonCognom?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?php echo $anyNaixement ?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?php echo $telefon ?></td>
    </tr>
</table>
</body>
</html>
