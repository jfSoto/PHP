<?php
    $ciudad = $_POST['ciudad'];
    $empresa = $_POST['empresa'];
    $apoderado = $_POST['apoderado'];
    $calle = $_POST['calle'];
    $empleado = $_POST['empleado'];
    $domicilio = $_POST['domicilio'];
    
    echo "En la ciudad de $ciudad, se acuerda entre la Empresa
    $empresa representada por el Sr. $apoderado en su carácter de
    Apoderado, con domicilio en la calle $calle y el Sr. $empleado, futuro
    empleado con domicilio en $domicilio, celebrar el presente contrato a
    Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90, 92,
    93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No.
    20744.";
?>
