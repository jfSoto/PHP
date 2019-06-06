<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <head>
    <?php
        $array1 = array("provincia1" => "Huelva", "provincia2" => "Sevilla",
        "provincia3" => "Córdoba", "provincia4" => "Málaga", "provincia5" => "Granada",
        "provincia6" => "Jaén", "provincia7" => "Almería");
        print_r($array1);

        echo "<br/><br/>";

        $array2 = array("Huelva", "Sevilla", "Córdoba", "Málaga", 
        "Granada", "Jaén", "Almería");
        print_r($array2);

        echo "<br/><br/>";
        
        $array3 = array(array("Huelva"), array("Sevilla"), array("Córdoba"),
        array("Málaga"), array("Granada"), array("Jaén"), array("Almería"));
        print_r($array3);

    ?>

    </body>
</html>