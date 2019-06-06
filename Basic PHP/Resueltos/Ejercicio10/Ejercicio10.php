<!-- 
    Crea un array multidimensional. La clave será el nombre de un alumno y el valor será un
    array como el del ejercicio anterior. Muestra por pantalla tu nota en SRI. 
-->

<?php
    $notas = [
    "Ana" => ["IAW" => 7, "SRI" => 3, "ASO" => 5, "SAD" => 8],
    "Benito" => ["IAW" => 8, "SRI" => 2, "ASO" => 5.5, "SAD" => 9],
    "Carmen" => ["IAW" => 9, "SRI" => 8, "ASO" => 6.5, "SAD" => 7],
    "Javier" => ["IAW" => 10, "SRI" => 10, "ASO" => 10, "SAD" => 10]
    ];

    $nota_iaw = $notas["Javier"]["IAW"];
    
    echo "Mi nota en IAW es: $nota_iaw";
?>
