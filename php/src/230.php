<!DOCTYPE html>
<html>
<head>
    <title>230.php</title>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <ul>
        <?php
        const NUM_MAX_ARRAY = 50;

        $lista50Numeros = [];
        for ($i = 0; $i < NUM_MAX_ARRAY; $i++) {
            $valorAAnyadir = rand(0, 99);
            $lista50Numeros[$i] = $valorAAnyadir;
            echo "<li>$lista50Numeros[$i]</li>";

        }
        ?>
    </ul>
</table>
</body>
</html>
