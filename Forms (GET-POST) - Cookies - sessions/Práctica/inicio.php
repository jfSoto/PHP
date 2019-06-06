<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito de la compra</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <form action="carrito.php" method="POST">
            <span>Seleccione lo que desee:</span>
            <select name="objetos">
                <option value="GTA 5">GTA 5</option>
                <option value="The Witcher 3">The Witcher 3</option>
                <option value="FIFA 19">FIFA 19</option>
                <option value="Monster Hunter World">Monster Hunter World</option>
                <option value="The Last of Us 2">The Last of Us 2</option>
                <option value="Devil May Cry 5">Devil May Cry 5</option>
                <option value="Resident Evil 2">Resident Evil 2</option>
                <option value="Dino Crisis">Dino Crisis</option>
                <option value="Dragon Ball FighterZ">Dragon Ball FighterZ</option>
                <option value="Tales of Xillia 2">Tales of Xillia 2</option>
            </select><br/>
            <span>Seleccione la cantidad:</span>
            <input type="number" name="cantidad" value="1" /><br/>
            <input type="submit" value="Añadir al Carrito" />
        </form>
    </body>
</html>