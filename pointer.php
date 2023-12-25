<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Pointer</title>
    </head>
    <body>
        <?php
            $numbers = array(1,2,3,4,5,6,7,8,9);

            echo current($numbers)."<br>";
            next($numbers);
            echo current($numbers)."<br>";
            next($numbers);
            echo current($numbers)."<br>";
            reset($numbers);
            echo current($numbers)."<br><br>";

            while ($number = current($numbers))
            {
                if($number == 9)
                {
                    echo $number;
                    break;
                }
                echo $number.",";
                next($numbers);
            }
        ?>
    </body>
</html>