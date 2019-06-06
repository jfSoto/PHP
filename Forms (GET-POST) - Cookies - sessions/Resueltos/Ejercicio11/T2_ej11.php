<!-- 
    Crea un script que cree una cookie llamada ‘usuario’, que almacene el nombre
    del visitante del sitio. Una vez creada, verifique si la cookie existe. En caso de
    ser así, la página dará la bienvenida al sitio, imprimiendo nuestro nombre por
    pantalla. 
-->

<?php
    setCookie("usuario",$POST_[‘nombre’],time()+5);
    if (isset($_COOKIE["usuario"]))
    {
        $miNombre=$_COOKIE["usuario"];
        echo "Hola $miNombre";
    }
    else
    {
        echo "Esta es tu primera visita";
    }
?>
