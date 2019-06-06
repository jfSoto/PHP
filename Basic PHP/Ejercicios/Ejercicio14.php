<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        function imprime_tabla($numero)
        {
            switch($numero)
            {
                case 1:
                for($tabla=1; $tabla<=1; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 2:
                for($tabla=2; $tabla<=2; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 3:
                for($tabla=3; $tabla<=3; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 4:
                for($tabla=4; $tabla<=4; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 5:
                for($tabla=5; $tabla<=5; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 6:
                for($tabla=6; $tabla<=6; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 7:
                for($tabla=7; $tabla<=7; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 8:
                for($tabla=8; $tabla<=8; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 9:
                for($tabla=9; $tabla<=9; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case 10:
                for($tabla=10; $tabla<=10; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;
                case "todas":
                for($tabla=1; $tabla<=10; $tabla++)
                {
                    echo "<h3>Tabla del $tabla </h3>";
         
                    for($i=1; $i<=10; $i++) 
                    {
                        echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
                    }
                }
                break;

            }
        }
        print_r(imprime_tabla("todas"));
    ?>
    </body>
</html>