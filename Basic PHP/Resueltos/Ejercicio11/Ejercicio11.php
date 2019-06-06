<!-- 
    Crea un array con notas aleatorias de una asignatura. Si la media de las notas da aprobado,
    muestra por pantalla un mensaje de felicitación. En caso contrario muestra un mensaje
    con la media que ha sacado. 
-->

<?php
    $notas[0] = rand(1,10);
    $notas[1] = rand(1,10);
    $notas[2] = rand(1,10);
    $notas[3] = rand(1,10);
    $notas[4] = rand(1,10);
    $media = array_sum($notas)/count($notas);

    if ($media >= 5) 
    {
        echo "Felicidades.";
    } else 
    {
        echo "Has sacado un $media de media.";
    }
?>
