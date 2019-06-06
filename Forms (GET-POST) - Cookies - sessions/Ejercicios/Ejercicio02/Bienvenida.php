<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
    <?php
        $notas = [$_POST["DWES"], $_POST["DWEC"], $_POST["DIW"], $_POST["DAW"], $_POST["EIE"]];
        $aprobados = 0;
        for($i = 0; $i < 5; $i++)
        {
            if($notas[$i] >= 5)
            {
                $aprobados++;
            }
        }
        $media = round(array_sum($notas)/count($notas),2);
        echo "La media de las notas es: $media y el número de aprobados es: $aprobados";
    ?>
    </body>
</html>