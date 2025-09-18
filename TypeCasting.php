<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> Casting</h3>
    <p> คือการเปลี่ยนชนิดข้อมูลให้เป็นชนิดที่ต้องการ
        โดยใส่ชนิดข้อมูลของตัวแปรไว้ในวงเล็บหน้าตัวแปรที่ต้องการจะเปลี่นนชนิดของข้อมูล เช่น</p>

    <p> $a = 10.5 > $a=(Integer)$a;</p>

    <?php
    $price = 100.17;
    $daliververy = 50.99;
    $total = $price + $daliververy;
    echo gettype($total) . "<br>";
    print $total . " ก่อนแปลงมีชนิดข้อมูลเป็น " . gettype($total) . "<br>";

    $total = (integer) $total;
    print $total . " หลังแปลงมีชนิดข้อมูลเป็น " . gettype($total) . "<br>";

    echo "<hr>";

    $sum = "400.89";
    echo gettype($sum) . "<br>";
    print $sum . " ก่อนแปลงมีชนิดข้อมูลเป็น " . gettype($sum) . "<br>";
    $sum = (double) $sum;
    echo gettype($sum) . "<br>";
    print $sum . " หลังแปลงมีชนิดข้อมูลเป็น " . gettype($sum) . "<br>";
    echo "<hr>";

    $a = 10.9;
    $b = 20.5;
    $c = $a + $b;
    echo gettype($c)."<br>";
    echo $c . "<br>";
    echo "<hr>";
    $a = (Integer)10.9;
    $b = (Integer)20.5;
    $c = $a + $b;
    echo gettype($c) . "<br>";
    echo $c . "<br>";
    ?>
</body>

</html>