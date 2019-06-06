<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            setcookie("fecha", date(DATE_RSS), time()+60);
            if(isset($_COOKIE["fecha"]))
            {
                echo "Tu última visita fue " . $_COOKIE["fecha"];
            }
            else
            {
                echo "Esta es tu primera visita";
            }
        ?>
    </body>
</html>