<!-- 
    Crea 3 script. En el primero, se crea una variable de sesión, se almacena, se
    imprime su valor y se muestra un enlace al siguiente. En el segundo, se accede
    a la variable de sesión, se destruye y se muestra un enlace al tercero. En el
    tercero, se intenta acceder a la variable. 
-->

<?php
    session_start();
    $var = $_SESSION['var'];
    print("Valor de la variable de sesión: $var");
    unset($_SESSION['var']);
?>

<br><a href="T2_ej17c.php">Siguiente</a>
