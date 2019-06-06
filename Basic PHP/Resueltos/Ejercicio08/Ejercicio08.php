<!-- 
    Crea un array llamado notas_iaw cuyas claves sean nombres de los alumnos de nuestro
    curso y los valores sus notas en IAW. Muestra por pantalla tus notas. Muestra por pantalla
    la media de notas de la clase en IAW. 
-->

<?php
    $notas_iaw = ["Ana" => 7, "Benito" => 3, "Carmen" => 10, "Daniel" => 5,
    "Javier" => 9.5];

    $mi_nota = $notas_iaw["Javier"];

    echo "Mi nota en IAW es: $mi_nota";

    $media_iaw = array_sum($notas_iaw)/count($notas_iaw);
    
    echo "La media de notas es: $media_iaw";
?>
