<!-- 
    Crear un formulario en una página llamada index.php que envíe los datos "nombre" y "contraseña" 
    a input.php. Esa página web consultará en una base de datos si existe ese usuario con 
    esa contraseña. En el caso de que exista muestra un mensaje ("Estás dentro!"); en caso contrario, 
    volverá a mostrar el formulario inicial.
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="login.php" method="POST">
            <label>Nombre: </label><input type="text" name="nombre" /><br>
            <label>Contraseña: </label><input type="password" name="clave" />
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
