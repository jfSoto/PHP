<?php
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];
    $operacion = $_GET['op'];

    if($operacion == 'suma') 
    {
        echo "$numero1 + $numero2 = " . ($numero1 + $numero2);
    } 
    else if ($operacion == 'resta')
    {
        echo "$numero1 - $numero2 = " . ($numero1 - $numero2);
    } 
    else 
    {
        echo "$numero1 * $numero2 = " . ($numero1 * $numero2);
    }
?>
