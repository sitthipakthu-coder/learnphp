<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>Compound_Assignment</b><br>
    <?php
    $a =  10;
    $b = 20;

    echo "a=a+b = a+=b ==" . ($a += $b) . "<br>";
    echo "a=a-b = a-=b ==" . ($a -= $b) . "<br>";
    echo "a=a*b = a*=b ==" . ($a *= $b) . "<br>";
    echo "a=a/b = a/b ==" . ($a /= $b) . "<br>";
    echo "a=a%b = a%=b ==" . ($a %= $b) . "<br>";

    ?>
</body>

</html>