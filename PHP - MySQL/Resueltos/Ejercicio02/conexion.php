<?php
    $conexion = mysqli_connect('localhost','root','','dws');
    
    if(!$conexion) 
    {
        echo "La conexión con la base de datos ha fallado";
    } 
    else 
    {
        $id = $_POST["id"];
    
        if ($id == 0) 
        {
            $consulta = "SELECT * FROM alumnos";
        } 
        else 
        {
            $consulta = "SELECT * FROM alumnos WHERE idAlumno='" . $id . "'";
        }
    
        $resultado = mysqli_query($conexion, $consulta);
    
        echo "<table><thead><tr><td>Id</td><td>Nombre</td><td>nota</td></tr>";
        echo "<tbody>";

        while($fila = mysqli_fetch_array($resultado)) 
        {
            echo "<tr><td>" . $fila["idAlumno"]; 
            echo $fila["nombre"] . "</td><td>";
            echo $fila["nota"] . "</td></tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
    } 
?>
