<!-- 
    Crea un script que guarde una cookie con la fecha y que indique al usuario la
    última vez que se conectó. 
-->

<?php
    date_default_timezone_set('Europe/Madrid');
    $fecha = date("d/m/y H:i:s");
    setCookie("fecha",$fecha);
    
    if(isset($_COOKIE["fecha"])) 
    {
        echo "Tu ultima visita fue el ".$_COOKIE["fecha"];
    }
    else
    {
        echo "Esta es tu primera visita en la página";
    }
?>
