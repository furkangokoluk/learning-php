<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Cookie</title>
    </head>
    <body>
        <?php
            $rand = rand(1,100);
            setcookie("deneme",$rand, time()+3600);
            echo "Çerez Oluşturuldu.. Rastgele Sayı Oluşturuldu..<br>";

            $cerez = $_COOKIE["deneme"];
            echo "Rastgele Sayı: ".$cerez;
        ?>
    </body>
</html>