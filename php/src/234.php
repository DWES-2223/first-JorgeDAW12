<!DOCTYPE html>
<html>
<head>
    <title>234.php</title>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <?php
    $alturaPersonas = [
        "Rubén" => 200,
        "Jony" => 175,
        "Iván" => 179,
        "Truita" => 160,
        "Messi" => 140];
    $alturasTotales = 0;

    echo "<thead> <tr> <th>Nom</th> <th>Alçada</th> </tr> </thead>";
    foreach ($alturaPersonas as $nombre => $altura) {
        echo "<tr><td>$nombre</td><td>$altura</td></tr>";
        $alturasTotales += $altura;
    }
    $alturaMedia = $alturasTotales / sizeof($alturaPersonas);
    echo "<tr><td>Altura Media</td><td>$alturaMedia</td></tr>";
    ?>
</table>
</body>
</html>
