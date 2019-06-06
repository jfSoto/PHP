<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        $alumnos = ["1" => ["1", "Javier", "Escudero Fernández", "DWS", 9.8], "2" => ["2", "José Fco.", "Soto Camacho", "DWS", 2], 
        "3" => ["3", "Álvaro", "Sánchez Doncel", "DIW", 7], "4" => ["4", "Rafael", "Robles Mayoral", "DIW", 5], 
        "5" => ["5", "Luciano", "Ramos Cortés", "DAW", 6]];
        
        function datosAlumno($num)
        {
            $alumnos = ["1" => ["1", "Javier", "Escudero Fernández", "DWS", 9.8], "2" => ["2", "José Fco.", "Soto Camacho", "DWS", 2], 
            "3" => ["3", "Álvaro", "Sánchez Doncel", "DIW", 7], "4" => ["4", "Rafael", "Robles Mayoral", "DIW", 5], 
            "5" => ["5", "Luciano", "Ramos Cortés", "DAW", 6]];
            for($i = 0; $i < 5; $i++)
            {
                echo $alumnos[$num][$i] . "<br/>";
            }
        }
        
        datosAlumno(1);

        function estadisticas($array)
        {
            $notas = [];
            $aprobados = 0;
            for($i = 0; $i < 5; $i++)
            {
                $notas[$i] = $array[($i+1)][4];
                if($array[($i+1)][4] >= 5)
                {
                    $aprobados++;
                }
            }
            $media = round(array_sum($notas)/count($notas),2);
            $mensaje = "La media de las notas de la clase es: $media y el número de aprobados es: $aprobados";
            return $mensaje;
        }
        echo "<br/>" . estadisticas($alumnos);
    ?>
    </body>
</html>