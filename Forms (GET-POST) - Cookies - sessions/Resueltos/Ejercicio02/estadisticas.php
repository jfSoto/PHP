<?php
    $dws = $_POST['dws'];
    $dwc = $_POST['dwc'];
    $diw = $_POST['diw'];
    $daw = $_POST['daw'];
    $eie = $_POST['eie'];
    $media = ($dws + $dwc + $diw + $daw + $eie) / 6;
    $hay_suspensos = (($dws < 5) || ($dwc < 5) || ($diw < 5) || ($daw <
    5) || ($eie < 5));
    
    echo "La media de las notas es $media<br>";
    
    if($hay_suspensos) 
    {
        echo "Has suspendido alguna asignatura";
    } 
    else 
    {
        echo "No has suspendido ninguna asignatura";
    }
?>
