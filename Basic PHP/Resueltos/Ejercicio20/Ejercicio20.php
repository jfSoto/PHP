<!-- 
    Crea un procedimiento llamado imprime_tabla($numero) . Si el procedimiento recibe la
    cadena “todas”, se imprimirán por pantalla las tablas de multiplicar del 1 al 10. En cambio,
    si recibe un número del 1 al 10, imprime la tabla. 
-->

<?php
    function imprime_tabla($numero) 
    {
        if ($numero == "todas") 
        {
            for($num1 = 1; $num1 <= 10; $num1++) 
            {
                
                for($num2 = 1; $num2 <= 10; $num2++) 
                {
                    echo "$num1 x $num2 = " . ($num1*$num2) . "<br>";
                }
            }
        } 
        else if (($numero >= 1) && ($numero <= 10)) 
        {
            for($num = 1; $num <= 10; $num++) 
            {
                echo "$numero x $num = " . ($numero*$num) . "<br>";
            }
        } 
        else 
        {
            echo "Error";
        }
    }
?>
