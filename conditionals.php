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
                echo "a kuçuktur b'den";
            }
            elseif ($a == $b)
            {
                echo "a esittir b'ye";
            }
            else
            {
                echo "b kucuktur a'dan";
            }
            echo "<br>";
            switch ($a)
            {
                case 1:
                    echo "a degiskeninin degeri 1'dir";
                    break;
                case 2:
                    echo "a degiskeninin degeri 2'dir";
                    break;
                case 3:
                    echo "a degiskeninin degeri 3'dir";
                    break;
            }
        ?>
    </body>
</html>