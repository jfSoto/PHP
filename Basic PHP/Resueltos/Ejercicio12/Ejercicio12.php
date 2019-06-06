<!-- 
    Crea un array con notas aleatorias de una asignatura. Recorre el array para mostrar todas
    las notas por pantalla. 
-->

<?php
    $notas[0] = rand(1,10);
    $notas[1] = rand(1,10);
    $notas[2] = rand(1,10);
    $notas[3] = rand(1,10);
    $notas[4] = rand(1,10);

    for ($i = 0; $i < 5; $i++) 
    {
        echo $notas[$i] . "<br>";
    }
?>
