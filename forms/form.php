<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>
    <body>
        <?php
            $k_adı = $_POST["k_adı"];
            $k_sifresi = $_POST["sifre"];
            echo "Kullanıcı Adınız: ".$k_adı."<br>";
            echo "Şifreniz: ".$k_sifresi;
        ?>

    </body>
</html>