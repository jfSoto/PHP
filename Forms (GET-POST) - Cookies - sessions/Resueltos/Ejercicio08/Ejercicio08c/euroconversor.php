<!-- Hacer un euroconversor de euros:
c. Realizar el conversor de monedas en una única página. -->

<?php
    if(!empty($_GET['euros'])) 
    {
        $euros = $_GET['euros'];
        $moneda = $_GET['moneda'];
        if($moneda == "peseta") 
        {
            $pesetas = $euros * 166.386;
            echo "$euros € son $pesetas ptas.";
        } 
        else 
        {
            $dolares = $euros * 1.15;
            echo "$euros € son $dolares $.";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="euroconversor.php" method="get">
            Cantidad en €: <input name="euros">
            Moneda:
            <select name="moneda">
                <option value="peseta">Pesetas</option>
                <option value="dolar">Dólares</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
