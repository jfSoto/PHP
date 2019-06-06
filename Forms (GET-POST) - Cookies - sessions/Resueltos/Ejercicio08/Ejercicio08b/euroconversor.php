<?php
    $euros = $_GET['euros'];
    $moneda = $_GET['moneda'];

    if($moneda == "peseta") 
    {
        $pesetas = $euros * 166.386;
        echo "$euros € son $pesetas ptas.";
    } 
    else 
    {
        $dolares = $euros * 1.15;
        echo "$euros € son $dolares $.";
    }
?>
