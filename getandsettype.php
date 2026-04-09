<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <p>แสดงชนิดข้อมูลของตัวแปร</p>
    <?php
    $price = 50; //Integer
    $score = 90.58; //Folat/Double
    $name = "Tang"; //String
    $isvaild = true; //Boolean
    $nonisvaild = false; //Boolean


    echo gettype($score) . "<br>";
    echo gettype($price) . "<br>";
    echo gettype($name) . "<br>";
    echo gettype($isvaild) . "<br>";
    echo gettype($nonisvaild) . "<br>";

    echo "<p>---------------------------------------------------------------------------------------</p>";
    settype($score, "Integer");
    echo gettype($score) . "<br>";
    echo $score;

    ?>
</body>

</html>