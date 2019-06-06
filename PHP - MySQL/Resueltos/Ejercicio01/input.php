<?php
    $usuario = $_POST['nombre'];
    $password = $_POST['clave'];
    
    $conexion = mysqli_connect("localhost", "root", "root", "dws");
    
    if (!$conexion) 
    {
        echo "<p>Error: No se pudo conectar a MySQL.</p>";
    } 
    else 
    {
        echo "<p>¡Éxito: Se realizó una conexión apropiada a MySQL!</p>";
    
        $query = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario' AND claveUsuario = '$password'";
        $resultado = mysqli_query($conexion, $query);
        $numero_resultados = mysqli_num_rows($resultado);
    
        if ($numero_resultados == 1) 
        {
            header('Location: exito.php');
        } else 
        {
            header('Location: index.html');
        }

        mysqli_close($conexion);
    }
?>
