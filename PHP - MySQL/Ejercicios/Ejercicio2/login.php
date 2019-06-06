<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
//conectar a la base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "root", "Servidor");

if (!$conexion) 
{
    echo "<p>Error: No se pudo conectar a MySQL.</p>";
}
else
{
    echo "<p>Éxito: Se realizó una conexión apropiada a MySQL! La base de datos Servidor es genial.</p>";

    $query = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario' AND claveUsuario = '$contraseña'";
    //echo "<p>$query</p>";
    $res = mysqli_query($conexion, $query);
    $row_cnt = $res->num_rows;
    //$row_cnt = mysqli_num:rows($res);
    if($row_cnt == 1)
    {
        header('Location: exito.php');
    }
    else
    {
        header('Location: index.html');
    }
    $res->close();
    
    //echo print_r(mysqli_fetch_array($res));
    //echo print_r(mysqli_fetch_array($res));


}
mysqli_close($conexion);
?>