<!DOCTYPE html>
<html>
    <head>
    <link href="Ejercicio1.css" rel="stylesheet"/>
    </head>
    <body>
        <table border="1">
            <?php
            $divisor = [50,51,52,53,54,55,56,57,58,59,60];
            echo "<tr><th class='morado'/>";
            for($i = 0; $i < 11; $i++)
            {
                echo "<th class='divisores'>$divisor[$i]</th>"; 
            }
            for($i = 0; $i < 10; $i++)
            {
                echo "<tr><th class='divisores'>".($i+1)."</th>";
                for($j = 0; $j < 11; $j++)
                {
                    if($divisor[$j] % ($i+1) == 0)
                    {
                        if(($i+1) % 2 == 0)
                        {
                            echo "<th class='par'>*</th>";
                        }
                        else
                        {
                            echo "<th class='impar'>*</th>";
                        }
                    }
                    else
                    {
                        if(($i+1) % 2 == 0)
                        {
                            echo "<th class='par'>-</th>";
                        }
                        else
                        {
                            echo "<th class='impar'>-</th>";
                        } 
                    }
                }
                echo "</tr>";
            }
            
            ?>
        </table>
    </body>
</html>