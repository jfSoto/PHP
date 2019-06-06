<?php
    /* En caso de que el usuario venga por primera vez y las cookies no
    estén fijadas */
    if ((!isset($_COOKIE['fondo']) ) && (!isset($_COOKIE['texto'])))
    {
        $Colorf = "White";
        $Colort = "Black";
    } 
    else 
    {
        /* Si las cookies están fijadas las utilizamos */
        $Colorf = $_COOKIE['fondo'];
        $Colort = $_COOKIE['texto'];
    }
    /* Comprobamos si el formulario ha sido enviado */
    if (isset($_POST["enviar"]))
    {
        setcookie("fondo", $_POST["colorFondo"]);
        setcookie("texto", $_POST["colorTexto"]);
        $Colorf = $_POST['colorFondo'];
        $Colort = $_POST['colorTexto'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body bgcolor="<?php echo $Colorf ?>" text="<?php echo $Colort ?>">
        <p>Ejercicio 6</p>
    </body>
</html>
