<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
    </head>
    <body>
        <?php
            $array1 = array("Furkan","Gökoluk","Adana",01,array("Gümüşhane Üniversitesi",2107201030,"Yazılım Mühendisliği"));
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
