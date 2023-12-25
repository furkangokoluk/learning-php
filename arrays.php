<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
    </head>
    <body>
        <?php
            $array1 = array("Furkan","Gokoluk","Adana",01,array("Gumüshane Universitesi",2107201030,"Yazilim Muhendisligi"));
            echo $array1[2]." ".$array1[3];

            echo "<br>";
            echo $array1[4][2];

            echo "<br>";
            echo "<pre>";
            print_r ($array1);
            echo "</pre>";
            
            echo count($array1);
        ?>
    </body>
</html>
