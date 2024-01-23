<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Session</title>
    </head>
    <body>
        <?php
            session_start();
            $_SESSION["ad"] = "Furkan";
            $_SESSION["soyad"] = "Gökoluk";
            $ad_soyad = $_SESSION["ad"]." ".$_SESSION["soyad"];
            echo $ad_soyad;
            session_destroy();
        ?>
    </body>
</html>