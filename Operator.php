<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 20;

    $c = $a + $b;
    echo $a . " + " . $b . " ผลรวม = " . $c . "<br>";
    echo $a . " + " . $b . " ผลรวม = " . ($a + $b) . "<br>";
    echo $a . " - " . $b . " ผลรวม = " . ($a - $b) . "<br>";
    echo $a . " * " . $b . " ผลรวม = " . ($a * $b) . "<br>";
    echo $a . " / " . $b . " ผลรวม = " . ($a / $b) . "<br>";
    echo $a . " % " . $b . " ผลรวม = " . ($a % $b) . "<br>";
    ?>
</body>

</html>