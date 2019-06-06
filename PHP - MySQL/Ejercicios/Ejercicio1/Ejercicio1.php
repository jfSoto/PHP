<?php
//conectar a la base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "root", "Servidor");

if (!$conexion) 
{
    echo "<p>Error: No se pudo conectar a MySQL.</p>";
}
else
{
    echo "<p>Éxito: Se realizó una conexión apropiada a MySQL! La base de datos Servidor es genial.</p>";

    //$query = "INSERT INTO Usuarios (idUsuario, nombreUsuario, claveUsuario) VALUES ('null', 'Manolo', '1234')";
    $query = "SELECT * FROM Usuarios";
    //echo "<p>$query</p>";
    $res = mysqli_query($conexion, $query);
    echo print_r(mysqli_fetch_array($res));
    echo print_r(mysqli_fetch_array($res));
}



mysqli_close($conexion);
?>