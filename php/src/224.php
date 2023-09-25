<!DOCTYPE html>
<html>
<head>
    <title>224.php</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$quantitat = $_POST["quantitat"];
$valorAcumulativoFinal = 0;
if (isset($quantitat)) {
    echo "<p>Introduce los valores a sumar: </p>";
    echo "<form method='GET'>";
    for ($i = 0; $i < $quantitat; $i++) {
        echo "<input id='quantitat$i' name='quantitat$i' type='number' required><br>";
    }
    echo "<input type='hidden' name='cantidad' value='$quantitat'>";
    echo "<button name='submit' type='submit'>Submit</button>";
    echo "<form>";
} else {
    for ($j = 0; $j < $_GET["cantidad"]; $j++) {
        $valorAcumulativoFinal += $_GET["quantitat$j"];
    }
    echo "$valorAcumulativoFinal";
}

?>
</body>
</html>
