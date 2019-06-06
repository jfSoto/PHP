<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php

        ?>
        <table border="1">
            <?php
                echo "<tr><th>Día</th><th>Nombre</th></tr>";
                $array3[1]="Lunes";
                $array3[2]="Martes";
                $array3[3]="Miércoles";   
                $array3[4]="Jueves";
                $array3[5]="Viernes";
                $array3[6]="Sábado";
                $array3[7]="Domingo";
                $d = Date("w");
                for ($i = 1; $i < 8; $i++)
                {
                    echo "<tr><td>$i</td>";
                    if($i%7 == $d)
                    {
                        echo "<td";
                        if($i == 6 || $i == 7){
                            echo " style='color:red';";
                        }
                        echo "><b>$array3[$i]</b></td></tr>";
                    }
                    
                    else
                    {
                        echo "<td";
                        if($i == 6 || $i == 7){
                            echo " style='color:red';";
                        }
                        echo ">$array3[$i]</td></tr>";
                    }
                    
                }
                
            ?>
        </table>

    </body>
</html>
