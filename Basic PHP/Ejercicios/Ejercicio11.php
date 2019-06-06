<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        $array = [10, 5, 6, 2, 5, 6];
        function estadisticas($array)
        {
            echo "La nota máxima es: " . (max($array)) . "<br/>";
            echo "La nota mínima es: " . (min($array)) . "<br/>";
            echo "La media de las notas es: " . $media = round(array_sum($array)/count($array),2);
        }
        estadisticas($array)
    ?>
    </body>
</html>