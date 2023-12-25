<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Functions</title>
    </head>
    <body>
        <?php
            function topla($number1=0, $number2=0)
            {
                $result = $number1 + $number2;
                echo "Toplamin Sonucu: ",$result."<br>";
            }
            function cıkar($number1, $number2)
            {
                $result = $number1 - $number2;
                echo "Cıkarimin Sonucu: ",$result."<br>";
            }
            function carp($number1, $number2)
            {
                $result = $number1 * $number2;
                echo "Carpimin Sonucu: ",$result."<br>";
            }
            function bol($number1, $number2)
            {
                $result = $number1 / $number2;
                echo "Bolumun Sonucu: ",$result."<br>";
            }
            
            $numb1 = 10;
            $numb2 = 5;
            topla($numb1,$numb2);
            cıkar($numb1,$numb2);
            carp($numb1,$numb2);
            bol($numb1,$numb2);
            topla();
            echo "<br>";

            function usAl($number1=0, $number2=0)
            {
                $result = 1;
                for ($i = 0 ; $i < $number2; $i++)
                {
                    $resultArray[$i] = $result *= $number1;
                }
                return $resultArray;
            }

            $array = usAl(2,8);
            
            foreach ($array as $value)
            {
                next($array);
                if ($x = current($array))
                {
                    echo $value.",";
                }
                else
                {
                    echo $value;
                    break;
                }
            }
            echo "<br><br>";
            $pi = 3.14;
            function daireAlaniHesapla($r)
            {
                global $pi;
                $result = $pi * $r * $r;
                return $result;
            }

            echo "Dairenin Alani: ".daireAlaniHesapla(3)
        ?>
    </body>
</html>