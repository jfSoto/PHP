<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(isset($_POST["usuario"]))
            {
                $usuario = $_POST["usuario"];
                $contraseña = $_POST["contraseña"];

                echo "mi nombre es $usuario y mi contraseña es $contraseña.";

                setcookie("user", $usuario, time()+5);
                setcookie("pass", $contraseña, time()+5);
            }
            else
            {
                if(isset($_COOKIE["user"]))
                {
                    $usuario = $_COOKIE["user"];
                    $contraseña = $_COOKIE["pass"];

                    echo "mi nombre es $usuario y mi contraseña es $contraseña.";
                }
                else
                {?>
                    <form action="Ejercicio12.php" method="POST">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" name="usuario" type="text" /><br/>
                        <label for="contraseña">Contraseña</label>
                        <input id="contraseña" name="contraseña" type="password" /><br/>
                        <input type="submit" />
                    </form><?php
                }
            }
        ?>
    </body>
</html>