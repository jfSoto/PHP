<!-- 
    Crea una función llamada agregar_nota($array, $nota) , que recibe un array con notas y
    devuelve el mismo array con el segundo parámetro agregado al final. 
-->

<?php
    function agregar_nota($array, $nota) 
    {
        $nuevo_array = $array;
        $nuevo_array[] = $nota;
        
        return $nuevo_array;
    }
?>
