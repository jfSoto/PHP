<?php
    @session_start();
    if(isset($_POST["procesarPedido"]) && isset($_SESSION["carrito"]))
    {
        if(empty($_SESSION["carrito"]))
        {
            if($_COOKIE["pedidos"] == 0)
            {
                echo "<span>Numero de pedidos: " . ($_COOKIE["pedidos"]) . "</span><br/>";
            }
            else
            {
                echo "<span>Numero de pedidos: " . ($_COOKIE["pedidos"]) . "</span><br/>";
            } 
            echo "<span>Fecha del último pedido: " . $_COOKIE["fecha"] . "</span><br/>";
        }
        else
        {
            setcookie("pedidos", $_COOKIE["pedidos"] + 1);
            echo "<span>Numero de pedidos: " . ($_COOKIE["pedidos"] + 1) . "</span><br/>";
            echo "<span>Fecha del último pedido: " . $_COOKIE["fecha"] . "</span><br/>";
        }
        session_destroy();
    }
    if(isset($_SESSION["carrito"]) && isset($_COOKIE["pedidos"]) && !isset($_POST["procesarPedido"]) && !isset($_POST["borrarHistorial"]) && !isset($_POST["deshacerPedido"]))
    {
        echo "<span>Numero de pedidos: " . ($_COOKIE["pedidos"]) . "</span><br/>";
        echo "<span>Fecha del último pedido: " . $_COOKIE["fecha"] . "</span><br/>";
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito de la compra</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <?php
            if(isset($_POST["deshacerPedido"]))
            {
                if($_COOKIE["pedidos"] > 0)
                {
                    setcookie("pedidos", $_COOKIE["pedidos"] - 1);
                    echo "<span>Numero de pedidos: " . ($_COOKIE["pedidos"] - 1) . "</span><br/>";
                }
                else
                {
                    setcookie("pedidos", $_COOKIE["pedidos"], time()-100);
                    echo "<span>Numero de pedidos: " . ($_COOKIE["pedidos"] = 0) . "</span><br/>";
                }
                echo "<span>Fecha del último pedido: " . $_COOKIE["fecha"] . "</span><br/>";   
            }
            else if(isset($_POST["borrarHistorial"]))
            {

                if(!isset($_COOKIE["pedidos"]))
                {
                    echo "<span>Numero de pedidos: 0</span><br/>";
                }
                else if($_COOKIE["pedidos"] == 0)
                {
                    echo "<span>Numero de pedidos: " . $_COOKIE["pedidos"] . "</span><br/>";
                }
                else
                {
                    setcookie("pedidos", $_COOKIE["pedidos"], time()-100);
                    echo "<span>Numero de pedidos: " . ($_COOKIE["pedidos"] = 0) . "</span><br/>";
                }
                echo "<span>Fecha del último pedido: " . $_COOKIE["fecha"] . "</span><br/>";
            }
            else if(!isset($_SESSION["carrito"]) && isset($_COOKIE["pedidos"]))
            {
                if($_COOKIE["pedidos"] == 0)
                {
                    echo "<span>Numero de pedidos: " . $_COOKIE["pedidos"] . "</span><br/>";
                }
                else
                {
                    echo "<span>Numero de pedidos: " . $_COOKIE["pedidos"] . "</span><br/>";
                }  
                echo "<span>Fecha del último pedido: " . $_COOKIE["fecha"] . "</span><br/>";   
            }
            else if(!isset($_COOKIE["pedidos"]) && !isset($_SESSION["carrito"]))
            {
                echo "<span>Numero de pedidos: 0</span><br/>";
                echo "<span>Fecha del último pedido: " . $_COOKIE["fecha"] . "</span><br/>";
            }
            /*else if(isset($_SESSION["carrito"]) && !isset($_COOKIE["pedidos"]))
            {
                echo "<span>Numero de pedidos: 0</span><br/>";
                echo "<span>Fecha del último pedido:" . $_COOKIE["fecha"] . "</span><br/>";
            }*/
        ?>
        <form action="pedidos.php" method="POST">
            <input type="submit" value="Deshacer Último Pédido" name="deshacerPedido" />
            <input type="submit" value="Borrar el Historial" name="borrarHistorial" />
        </form>
    </body>
</html>