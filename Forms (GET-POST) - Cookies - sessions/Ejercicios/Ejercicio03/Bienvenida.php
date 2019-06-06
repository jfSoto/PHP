<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];
        if($operacion == "suma")
        {
            $operacion = $numero1 + $numero2;
        }
        else if($operacion == "resta")
        {
            $operacion = $numero1 - $numero2;
        }
        else if($operacion == "multiplicacion")
        {
            $operacion = $numero1 * $numero2;
        }
        else
        {
            $operacion = $numero1 / $numero2;
        }
        echo $operacion;

    ?>
    </body>
</html>