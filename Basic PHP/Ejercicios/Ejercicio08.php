<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        $notas['AAA']=5;
        $notas['BBB']=6;
        $notas['CCC']=7;   
        $notas['DDD']=8;
        $notas['EEE']=9;
        print_r($notas);
        $media = round(array_sum($notas)/count($notas),2);
        echo "<p>La media de las notas es: $media</p>";
    ?>

    </body>
</html>
