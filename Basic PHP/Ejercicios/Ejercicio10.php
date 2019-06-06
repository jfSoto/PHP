<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        function notas_aleatorias($size)
        {
            for($i = 0; $i < $size; $i++)
            {
                $notas[$i] = rand(0, 10);
            }
            return $notas;
        }
        print_r(notas_aleatorias(6));

    ?>
    </body>
</html>