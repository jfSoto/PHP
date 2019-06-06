<!-- 
    Crea un formulario que solicite el nombre de usuario y clave de un cliente. En
    una segunda página crea dos variables de sesión. En una tercera página
    recupera los valores almacenados en las variables de sesión. 
-->

<?php
    session_start();
    if(isset($_SESSION['nombre']) && isset($_SESSION['pw'])) 
    {
        $nombre = $_SESSION['nombre'];
        $password = $_SESSION['pw'];
        echo "Mi nombre es $nombre y mi contraseña es $password";
    } 
    else 
    {
        echo "No existe la variable de sesión";
    }
?>
