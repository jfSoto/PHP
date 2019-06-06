<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $euros = $_POST["euros"];
            $moneda = $_POST["moneda"];
            if($moneda == "pesetas")
            {
                echo $euros . "€ son " . $euros * 166.386 . " pesetas";
            }
            else
            {
                echo $euros . "€ son " . $euros * 1.13 . "$";
            }
        ?>
    </body>
</html>