<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            margin: 0 0;
        }
    </style>
</head>

<body>

    <?php

    $price = 50;
    $score = 50.5;
    $name = "Sitthipak";
    $isvalid = false;

    echo gettype($price)."<br>";
    echo gettype($isvalid)."<br>";
    echo gettype($score)."<br>";
    echo gettype($name)."<br>";

    settype($score,"integer");
    echo "<hr>";
    echo "หลังเปลี่ยน ตัวแปร score ".gettype($score)."<br>";
    ?>
</body>

</html>