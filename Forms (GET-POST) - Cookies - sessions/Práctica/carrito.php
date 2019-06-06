<?php
    session_start();
    if(!isset($_SESSION["carrito"]))
    {
        $_SESSION["carrito"]=array();
    }
    for($i = 0; $i < $_POST["cantidad"]; $i++)
    {
        array_push($_SESSION["carrito"], $_POST["objetos"]);
    }
    if (!isset($_COOKIE["pedidos"])) 
    {
        setcookie("pedidos", 0);
    }
    date_default_timezone_set('Europe/Paris');
    if(!empty($_SESSION["carrito"]))
    {
        setcookie("fecha", date("d/m/y G:i:s"));
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
        <table>
        <?php
        $precios = [25, 35, 45, 50, 70, 70, 65, 10, 40, 20];
        $total = 0;
        if(empty($_SESSION["carrito"]))
        {
            echo "<span class='vacia'>Su cesta está vacía</span>";
        }
        else
        {
            for($i = 0; $i < count($_SESSION["carrito"]); $i++)
            {   
                echo "<tr><td class='celeste'>Objeto " . ($i + 1) . "</td><td class='verde'>";
                echo $_SESSION["carrito"][$i] . "</td>";
                
                switch($_SESSION["carrito"][$i])
                {
                    case "GTA 5":
                    echo "<td class='amarillo'>" . $precios[0] . "€</td>";
                    echo "<td><img src='imagenes/gta5.jpg' /></td>";
                    $total += $precios[0];
                    break;

                    case "The Witcher 3":
                    echo "<td class='amarillo'>" . $precios[1] . "€</td>";
                    echo "<td><img src='imagenes/witcher.jpg' /></td>";                   
                    $total += $precios[1];
                    break;

                    case "FIFA 19":
                    echo "<td class='amarillo'>" . $precios[2] . "€</td>";
                    echo "<td><img src='imagenes/fifa.jpg' /></td>";                    
                    $total += $precios[2];
                    break;

                    case "Monster Hunter World":
                    echo "<td class='amarillo'>" . $precios[3] . "€</td>";
                    echo "<td><img src='imagenes/mhw.jpg' /></td>"; 
                    $total += $precios[3];
                    break;

                    case "The Last of Us 2":
                    echo "<td class='amarillo'>" . $precios[4] . "€</td>";
                    echo "<td><img src='imagenes/lou2.jpg' /></td>"; 
                    $total += $precios[4];
                    break;

                    case "Devil May Cry 5":
                    echo "<td class='amarillo'>" . $precios[5] . "€</td>";
                    echo "<td><img src='imagenes/dmc5.jpg' /></td>"; 
                    $total += $precios[5];
                    break;

                    case "Resident Evil 2":
                    echo "<td class='amarillo'>" . $precios[6] . "€</td>";
                    echo "<td><img src='imagenes/re2.jpg' /></td>";
                    $total += $precios[6];
                    break;

                    case "Dino Crisis":
                    echo "<td class='amarillo'>" . $precios[7] . "€</td>";
                    echo "<td><img src='imagenes/dc.jpg' /></td>";
                    $total += $precios[7];
                    break;

                    case "Dragon Ball FighterZ":
                    echo "<td class='amarillo'>" . $precios[8] . "€</td>";
                    echo "<td><img src='imagenes/dbf.jpg' /></td>"; 
                    $total += $precios[8];
                    break;

                    case "Tales of Xillia 2":
                    echo "<td class='amarillo'>" . $precios[9] . "€</td>";
                    echo "<td><img src='imagenes/tox2.jpg' /></td>";
                    $total += $precios[9];
                    break;
                }
                echo "</tr>";
            }
        }
        ?>
        </table><br/>
        <span class="total">
            Total: <?php echo $total . "€"; ?>
        </span><br/><br/>
        <button onclick="location.href='inicio.php'">Seguir Comprando</button><br/><br/>
        <form action="pedidos.php" method="POST">
            <input type="hidden" name="total" value=<?php echo "$total"?> />
            <input type="submit" value="Procesar Pedido" name="procesarPedido" />
        </form>
    </body>
</html>