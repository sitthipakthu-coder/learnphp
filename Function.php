<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <?php
    $total1 = null;
    $total2 = "";
    $total3 = 0;
    $total4 = "Sitthipak";

    echo "ตัวแปร total1 ใช้ isset = " . isset($total1) . "<br>";
    echo "ตัวแปร total2 ใช้ isset = " . isset($total2) . "<br>";
    echo "ตัวแปร total3 ใช้ isset = " . isset($total3) . "<br>";
    echo "ตัวแปร total4 ใช้ isset = " . isset($total4) . "<br>";
    unset($total4);
    echo "ตัวแปร total4 ใช้ unset = " . isset($total4) . "<br>";

    echo "<hr>";

    $total4 = "Sitthipak";
    echo "ตัวแปร total1 ใช้ empty = " . empty($total1) . "<br>";
    echo "ตัวแปร total2 ใช้ empty = " . empty($total2) . "<br>";
    echo "ตัวแปร total3 ใช้ empty = " . empty($total3) . "<br>";
    echo "ตัวแปร total4 ใช้ empty = " . empty($total4) . "<br>";

    echo "<hr>";

    echo "ตัวแปร total1 ใช้ is_null = " . is_null($total1) . "<br>";
    echo "ตัวแปร total2 ใช้ is_null = " . is_null($total2) . "<br>";
    echo "ตัวแปร total3 ใช้ is_null = " . is_null($total3) . "<br>";
    echo "ตัวแปร total4 ใช้ is_null = " . is_null($total4) . "<br>";

    echo "<hr>";
    //var_dump สามารถใช้แสดงได้เลยไม่ต้อง echo ก็ได้
    echo var_dump($total1)."<br>";
    echo var_dump($total2)."<br>";
    echo var_dump($total3)."<br>";
    echo var_dump($total4)."<br>";
    ?>
</body>

</html>