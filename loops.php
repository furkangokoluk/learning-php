<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
</head>
<body>
    <?php
        $count = 0;
        while($count <= 10)
        {
            echo $count.",";
            $count++;
            if ($count == 10)
            {
                echo $count;
                break;
            }
        }
        echo "<br>";
        for ($i = 0 ; $i <= 10 ; $i++)
        {
            if ($i == 10)
            {
                echo $i;
                break;
            }
            echo $i.",";
        }
        echo "<br>";
        $numbers = array(0,1,2,3,4,5,6,7,8,9,10);
        foreach ($numbers as $number)
        {
            if ($number == 10)
            {
                echo $number;
                break;
            }
            echo $number.",";
        }
        echo "<br>";
        for ($i = 0 ; $i <= 10 ; $i++)
        {
            if ($i == 5)
            {
                continue;
            }
            if ($i == 10)
            {
                echo $i;
                break;
            }
            echo $i.",";
        }
    ?>
</body>
</html>