<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        $notas_iaw = ["Soto" => 10, "Luciano" => 5.75,
        "Álvaro" => 5, "Rafa" => 0, "Javi" => 5];
        print_r($notas_iaw);
        $media = round(array_sum($notas_iaw)/count($notas_iaw),2);
        echo "<p>La media de las notas es: $media</p>";
    ?>

    </body>
</html>
