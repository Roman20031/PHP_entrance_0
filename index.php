<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Petr"; // $ = pravý alt + ů
        $text = "Uživatel";
    ?>
    <h1>Fist project in PHP</h1>

    <p>Zde je jméno účastmika zájezdu:
     <?php
        $name = "Petr"; // $ = pravý alt + ů
        echo "$name Breit";
    ?>   
    <a href="page.php"></a>
    </p>
    <?php
        $i = 1;
        while ($i < 6){
            echo "<h3> $text $i </h3>"
            $i++;
            //$i = $i + 2
        }

        for ($j = 0; $ <= 10; $j++){
            echo "The number is: $j <br>";
        }
    ?>
</body>
</html>





