<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        $alumno = array("Soto" => ["AAA" => 5, "BBB" => 7, "CCC" => 8, "DDD" => 9, "EEE" => 10], 
        "Álvaro" => ["AAA" => 3, "BBB" => 4, "CCC" => 5, "DDD" => 6, "EEE" => 7]);
        
        echo $alumno["Álvaro"]["CCC"];

    ?>
    </body>
</html>
