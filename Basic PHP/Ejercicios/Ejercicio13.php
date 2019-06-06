<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        $notas = [10, 5, 6, 2, 5, 6];
        function notas_aprobadas($array)
        {
            $array2 = [];
            for($i = 0; $i < count($array); $i++)
            {
                if($array[$i] >= 5)
                {
                    $array2[] = $array[$i];
                }
            }
            return $array2;
        }
        print_r(notas_aprobadas($notas));
    ?>
    </body>
</html>