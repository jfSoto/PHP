<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped table-dark">
<tr>
<th>ID Rey Mago</th>
<th>Nombre</th>
<th>Numero de Regalos</th>
</tr>
<tr>
<?php
$conexion = mysqli_connect("127.0.0.1", "root", "root", "PracticaPhp");
if (!$conexion)
{
echo "<p>Error: No se pudo conectar a MySQL.</p>";
}
Else
{
    echo "<p>Éxito: Se realizó una conexión apropiada a MySQL! La base de datos Servidor es genial.</p>";
    $query = "SELECT reyesmagos.idReyMago as 'ID Rey Mago',
    reyesmagos.nombreReyMago as 'Nombre',
    count(regalos.idReyMagoFK1) as 'Numero de Regalos'
    FROM reyesmagos, regalos
    WHERE reyesmagos.idReyMago = regalos.idReyMagoFK1
    GROUP BY regalos.idReyMagoFK1
    ORDER BY 3 DESC";
    $res = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_row($res))
    {
    echo "<tr>";
    for($i = 0; $i < count($row); $i++)
    {
    echo "<td>$row[$i]</td>";
    }
    echo "</tr>";
    }
}
mysqli_close($conexion);
?>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>