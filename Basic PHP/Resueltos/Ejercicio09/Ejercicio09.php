<!-- 
    Crea una matriz asociativa llamada notas . Cada clave será el nombre de una de tus
    asignaturas y el valor será la clave. Muestra por pantalla tus notas de IAW. Muestra por
    pantalla tu media de notas. 
-->

<?php
    $notas = ["IAW" => 7, "SRI" => 3, "ASO" => 10, "SAD" => 5, "SGBD" => 9.5];
    $nota_iaw = $notas["IAW"];

    echo "Mi nota en IAW es: $nota_iaw";

    $mi_media = array_sum($notas)/count($notas);
    
    echo "La media de notas es: $mi_media";
?>
