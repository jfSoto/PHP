<!-- 
    Haz un contador del número de veces que una página ha sido visitada por el
    usuario. Crea el contador e imprime también el id de sesión. 
-->

<?php
    session_start();
    if (isset($_SESSION["visitas"])) 
    {
        $visitas = $_SESSION["visitas"];
    }
    else 
    {
        $visitas = 1;
    }

    $_SESSION["visitas"]=$visitas+1;
    
    echo "Has visitado está página $visitas veces.<br>";
    echo "Mi id de sesión es " . session_id();
?>
