<!-- 
    Crea una página PHP que calcule e imprima el área y el perímetro de un rectángulo. Para
    ello, define dos variables para los lados que reciban un número aleatorio entre 1 y 12
    (función rand ) y haga los cálculos necesarios. 
-->

<?php
    $lado1 = rand(1,12);
    $lado2 = rand(1,12);
    $area = $lado1 * $lado2;
    $perimetro = $lado1*2 + $lado2*2;
    
    echo "El área es $area y el perímetro es $perimetro";
?>
