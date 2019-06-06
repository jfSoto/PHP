<!-- 
    Crea una función llamada notas_aleatorias($size) que recibe un número entero y
    devuelve un array de tamaño $size lleno de notas aleatorias. 
-->

<?php
    function notas_aleatorias($size) 
    {
        $resultado = array();
        
        for($indice = 0; $indice < $size; $indice++) 
        {
            $resultado[$indice] = rand(0,10);
        }

        return $resultado;
    }
?>
