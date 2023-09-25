<!DOCTYPE html>
<html>
<head>
    <title>225.php</title>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <?php
    $files = $_POST["files"];
    $columnes = $_POST["columnes"];
    $startCharCode = ord('A');
    for ($i = 0; $i < $files; $i++) {
        $letraActual = chr($startCharCode + $i);
        echo "<tr>";
        for ($j = 1; $j <= $columnes; $j++) {
            echo "<td>$letraActual$j</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
