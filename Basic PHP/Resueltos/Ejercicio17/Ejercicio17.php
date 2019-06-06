<!-- 
    Crea un procedimiento llamado estadisticas($array) . El procedimiento recibirá un
    array de notas por parámetro e imprimirá por pantalla la nota máxima, la mínima y la
    media. 
-->

<?php
    function estadisticas($array) 
    {
        $nota_max = max($array);
        $nota_min = min($array);
        $media = array_sum($array)/count($array);
        
        echo "La nota máxima es $nota_max.<br>";
        echo "La nota mínima es $nota_min.<br>";
        echo "La nota media es $media.<br>";
    }
?>
