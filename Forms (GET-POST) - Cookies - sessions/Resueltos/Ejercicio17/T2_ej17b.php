<!-- 
    Crea un formulario que solicite el nombre de usuario y clave de un cliente. En
    una segunda página crea dos variables de sesión. En una tercera página
    recupera los valores almacenados en las variables de sesión. 
-->

<?php
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['pw'] = $_POST['pw'];
?>

<a href="T2_ej17c.php">Ver última</a>
