<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        $notas = [10, 5, 6, 2, 5, 6];
        function agregar_nota($array, $nota)
        {
            array_push($array, $nota);
            return $array;
            /*EJEMPLO
            $a=array("red","green");
            array_push($a,"blue","yellow");
            print_r($a)*/
        }
        print_r(agregar_nota($notas, 7));
    ?>
    </body>
</html>