<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <head>
    <?php
        $lado1 = rand(1 , 12);
        $lado2 = rand(1 , 12);
        $area = $lado1 * $lado2;
        $perimetro = ($lado1 * 2) + ($lado2 * 2);
        echo "El lado 1 del rectángulo es: " . $lado1 . "<br/>";
        //echo "El lado 1 del rectángulo es: $lado1 <br/>";
        echo "El lado 2 del rectángulo es: " . $lado2 . "<br/>";
        echo "El área del rectángulo es: " . $area . "<br/>";
        echo "El perímetro del rectángulo es: " . $perimetro;

    ?>

    </body>
</html>
