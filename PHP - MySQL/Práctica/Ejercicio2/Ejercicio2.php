<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-striped table-dark">
            <tr>
                <th>ID</th>
                <th>Regalo</th>            
            </tr>
            <tr>
    <?php

        $nombre = $_POST['nombre'];

        $conexion = mysqli_connect("127.0.0.1", "root", "root", "PracticaPhp");

        if (!$conexion) 
        {
            echo "<p>Error: No se pudo conectar a MySQL.</p>";
        }
        else
        {
            echo "<p>Éxito: Se realizó una conexión apropiada a MySQL! La base de datos Servidor es genial.</p>";

            $query = "SELECT idRegalo as 'ID', 
            nombreRegalo as 'Regalo' 
            FROM regalos, ninios, niniosRegalos 
            WHERE ninios.idNinio = niniosregalos.idNinioFK2 
            AND regalos.idRegalo = niniosregalos.idRegaloFK3 
            AND ninios.nombreNinio = '$nombre'";

            $res = mysqli_query($conexion, $query);                
            while ($row = mysqli_fetch_row($res)) 
            {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";     
            }
        }
        mysqli_close($conexion);
    ?>
        </table>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
</html>