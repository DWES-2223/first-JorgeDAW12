<?php
global $records;
include 'atletes.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 270.php</title>
</head>
<body>
<table>
    <!-- Capçalera de la taula --> <tr><th>Prova</th> <th>Marca</th> <th>Atleta</th> <th>Natalici</th> <th>Club</th> <th>Data</th> <th>Lloc</th></tr>
    <tbody>
    <?php foreach ($records as $prueba => $datos): ?>
        <!-- Cos de la taula --> <tr><td><?= $prueba ?></td>
            <?php foreach ($datos as $valor): ?>
                <td><?= $valor ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
