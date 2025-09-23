<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $a = 5;
    $b = 10;

    //การเพิ่มค่า
    echo "ค่าเริ่มต้น = $a<br>";
    echo "เพิ่มค่าแบบ perfix = " . (++$a) . "<br>";
    echo "ค่าปัจจุบันของ a = $a<br>";

    echo "<hr>";
    $a = 5;
    echo "ค่าเริ่มต้น = $a<br>";
    echo "เพิ่มค่าแบบ Postfix = " . ($a++) . "<br>";
    echo "ค่าปัจจุบันของ a = $a<br>";
    //ลดค่า
    echo "<hr>";
    $a = 5;
    echo "ค่าเริ่มต้น = $a<br>";
    echo "ลดค่าแบบ Postfix = " . ($a--) . "<br>";
    echo "ค่าปัจจุบันของ a = $a<br>";

    echo "<hr>";
    $a = 5;
    echo "ค่าเริ่มต้น = $a<br>";
    echo "ลดค่าแบบ Postfix = " . ($a--) . "<br>";
    echo "ค่าปัจจุบันของ a = $a<br>";

    ?>

</body>

</html>