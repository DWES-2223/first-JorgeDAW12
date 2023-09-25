<?php
$nombre = $_GET["nombre"];
if(isset($nombre)) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>223.php</title>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <thead>
    <tbody>
    <tr>
        <td>a</td>
        <td>*</td>
        <td>b</td>
        <td>=</td>
        <td>a*b</td>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $resultadoMultiplicacion = $nombre * $i;
        echo "<tr>
            <td>$nombre</td>
            <td>*</td>
            <td>$i</td>
            <td>=</td>
            <td>$resultadoMultiplicacion</td>
        </tr>";
    }
    } else {
        echo "Posa el nombre pel QueryString";
    }
    ?>
    </tbody>
    </thead>
</table>
</body>
</html>
