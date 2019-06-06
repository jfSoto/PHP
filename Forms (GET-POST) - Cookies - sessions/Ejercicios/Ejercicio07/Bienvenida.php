<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $equipo = $_POST["equipo"];
            if($equipo == "betis")
            {
                echo "<body style='background-color:green'>";
            }
            else if($equipo == "madrid")
            {
                echo "<body style='background-color:#8A2BE2'>";
            }
            else if ($equipo == "barcelona")
            {
                echo "<body style='background-color:#AB2A3E'>";
            }
            else
            {
                echo "<body style='background-color:red'>";
            }
            ?>
    </body>
</html>