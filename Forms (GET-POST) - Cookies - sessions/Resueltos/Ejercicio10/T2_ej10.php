<!-- 
    Crea un script que guarde una cookie con el nombre de usuario y lo muestre por
    pantalla. 
-->

<?php
    setCookie("nombre","Javier",time()+10);
    $miNombre=$_COOKIE["nombre"];
    echo "Hola $miNombre";
?>
