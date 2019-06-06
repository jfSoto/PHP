<!-- 
    Crea una función llamada notas_aprobadas($array) que recibe un array de notas y devuelve
    otro array con las notas aprobadas. 
-->

<?php
    function notas_aprobadas($array) 
    {
        $resultado = array();
        
        for($indice = 0; $indice < sizeof($array); $indice++)
        {
            if($array[$indice] >= 5)
            {
                $resultado[] = $array[$indice];
            }
        }
        
        return $resultado;
    }
?>
