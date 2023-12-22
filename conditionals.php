<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Conditionals</title>
    </head>
    <body>
        <?php
            $a = 2;
            $b = 1;
            if ($a < $b)
            {
                echo "a küçüktür b'den";
            }
            elseif ($a == $b)
            {
                echo "a eşittir b'ye";
            }
            else
            {
                echo "b küçüktür a'dan";
            }
            echo "<br>";
            switch ($a)
            {
                case 1:
                    echo "a değişkeninin değeri 1'dir";
                    break;
                case 2:
                    echo "a değişkeninin değeri 2'dir";
                    break;
                case 3:
                    echo "a değişkeninin değeri 3'dir";
                    break;
            }
        ?>
    </body>
</html>