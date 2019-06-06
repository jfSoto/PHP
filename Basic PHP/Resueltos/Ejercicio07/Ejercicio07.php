<!-- 
    Crea un array con los nombres de los días de la semana y muéstralo por pantalla.
    Posteriormente cambia el nombre de “miércoles” por “junio” y vuelve a mostrar el array por
    pantalla. 
-->

<?php
    $semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes",
    "Sábado", "Domingo");

    echo $semana[2];

    $semana[2] = "Junio";
    
    echo $semana[2];
?>
