<!DOCTYPE html>
<html>
    <head>
    </head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Ejercicio 3</title>
        <link href="Ejercicio3.css" rel="stylesheet" />
    <body>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum sagittis velit, 
            eu vestibulum eros pulvinar vitae. Pellentesque non diam et ex euismod mollis a in sem. 
            Curabitur id enim hendrerit, faucibus diam non, tristique dolor. Proin a est vel magna iaculis 
            dignissim vitae at urna. Suspendisse feugiat elit a est hendrerit aliquam. Curabitur nec laoreet 
            mauris. Maecenas at libero eu arcu fringilla lobortis non in ligula. Aliquam in gravida nulla. 
            Sed tellus dolor, semper eu odio condimentum, vestibulum vulputate neque.</p>
        <?php
            define("DEBUG", 1);
            function debug($variable)
            {
                if(DEBUG == 1)
                {
                    echo "<p class='depuracion'>$variable</p>";
                }
            }
            debug("hasta aquí funciona y esto es un texto");
        ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum sagittis velit, 
            eu vestibulum eros pulvinar vitae. Pellentesque non diam et ex euismod mollis a in sem. 
            Curabitur id enim hendrerit, faucibus diam non, tristique dolor. Proin a est vel magna iaculis 
            dignissim vitae at urna. Suspendisse feugiat elit a est hendrerit aliquam. Curabitur nec laoreet 
            mauris. Maecenas at libero eu arcu fringilla lobortis non in ligula. Aliquam in gravida nulla. 
            Sed tellus dolor, semper eu odio condimentum, vestibulum vulputate neque.</p>
        <?php
            debug("hasta aquí funciona y esto es un número " . 4);
        ?>
    </body>
</html>