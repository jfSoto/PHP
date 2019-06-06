<!-- 
    Crea un formulario que solicite el nombre de usuario y clave de un cliente. En
    una segunda página crea dos variables de sesión. En una tercera página
    recupera los valores almacenados en las variables de sesión. 
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="T2_ej17b.php" method="POST">
            Nombre: <input name="nombre" type="text">
            Clave: <input name="pw" type="password">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
