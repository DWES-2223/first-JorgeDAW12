<!DOCTYPE html>
<html>
<head>
    <title>234.php</title>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <?php
    $persona1 = ["nom" => "Jorge", "altura" => "181", "email" => "j@gmail.com"];
    $persona2 = ["nom" => "Rubén", "altura" => "200", "email" => "r@gmail.com"];
    $persona3 = ["nom" => "Arthur", "altura" => "175", "email" => "ar@gmail.com"];
    $persona4 = ["nom" => "Álvaro", "altura" => "179", "email" => "al@gmail.com"];
    $persona5 = ["nom" => "Koke", "altura" => "181", "email" => "k@gmail.com"];

    $personas = [$persona1, $persona2, $persona3, $persona4, $persona5];

    echo "<thead> <tr> <th>Nom</th> <th>Alçada</th> <th>Email</th> </tr> </thead>";
    foreach ($personas as $persona) {
        echo "<tr>";
        foreach ($persona as $atributo => $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
