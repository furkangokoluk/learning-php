<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    <body>
        <?php
            echo "----------------- int Degiskenler -----------------"."<br>";
            $number1 = 10;
            $number2 = 6;
            echo $number1."<br>".$number2."<br>";
            echo $number1 - $number2;
            echo "<br>";

            echo "<br>"."----------------- string Degiskenler -----------------"."<br>";
            $str1 = "Furkan Gokoluk";
            $str2 = "Yazilim Muhendisligi ";
            echo $str1;
            
            echo "<br>";
            echo "Tekrar ".$str1;

            echo "<br>";
            $str2 .= $str1;
            echo $str2;
            echo "<br>";

            echo "<br>"."----------------- float Degiskenler -----------------"."<br>";
            $myFloat = $number1 / $number2;
            echo $myFloat;

            echo "<br>";
            $random = rand(1,100);
            echo $random;
            echo "<br>";

            echo "<br>"."----------------- boolean Degiskenler -----------------"."<br>";
            $bool1 = true;
            $bool2 = false;
            echo $bool1."<br>".$bool2."<br>------------------------------<br>";
            
            $ist1 = "PHP Programming";
            $ist3 = 436312;
            echo isset($ist1)."<br>".isset($ist2)."<br>".isset($ist3)."<br>------------------------------<br>";
            unset($ist1);
            echo isset($ist1)."<br>".isset($ist2)."<br>".isset($ist3)."<br>------------------------------<br>";
            echo empty($ist1)."<br>".empty($ist2)."<br>".empty($ist3)."<br>------------------------------<br>";
            
            echo "<br>"."----------------- sabitler -----------------"."<br>";
            define("MAX_HEIGHT","500");
            echo MAX_HEIGHT;
        ?>
    </body>
</html>