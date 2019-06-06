<!-- 
    Crea un contador de visitas a la página usando una cookie. A cada visita
    mostrará la cookie y actualizará su valor. 
-->

<?php
    if(isset($_COOKIE['visitas']))
    {
        $visitas = $_COOKIE['visitas'] + 1;
        echo "Es tu visita número $visitas";
        setcookie('visitas', $visitas, time()+3600);
    } 
    else 
    {
        echo "Es tu primera visita";
        setcookie('visitas', 1, time()+3600);
    }
?>
