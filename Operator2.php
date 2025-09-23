<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a = 500;
    $b = 500;

    echo var_dump(  $a == $b )."<br>";
    echo var_dump(  $a === $b )."<br>";
    echo var_dump(  $a != $b )."<br>";
    echo var_dump(  $a <> $b )."<br>";
    echo var_dump(  $a !== $b )."<br>";
    echo var_dump(  $a > $b )."<br>";
    echo var_dump(  $a >= $b )."<br>";
    echo var_dump(  $a <= $b )."<br>";

    echo "<hr>";

    echo "ผลการเปรียมเทียบ = ".( $a == $b)."<br>";
    echo "ผลการเปรียมเทียบ = ".( $a === $b)."<br>";
    echo "ผลการเปรียมเทียบ = ".( $a !=  $b)."<br>";
    echo "ผลการเปรียมเทียบ = ".( $a <> $b)."<br>";
    echo "ผลการเปรียมเทียบ = ".( $a !== $b)."<br>";
    echo "ผลการเปรียมเทียบ = ".( $a > $b)."<br>";
    echo "ผลการเปรียมเทียบ = ".( $a >= $b)."<br>";
    echo "ผลการเปรียมเทียบ = ".( $a <= $b)."<br>";

    ?>
</body>
</html>