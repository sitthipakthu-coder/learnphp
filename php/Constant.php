<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>ค่าคงที่(Cnstant)</b>
    <p>การสร้างตัวแปรที่เก็ยข้อมูลที่ไม่สามารแก้ไขได้</p>

    <?php

    $score = 100;
    echo "คะแนน $score <br>";
    $score += 200;
    echo "คะแนน $score <br>";

    define("SCORE1", 100);
    echo SCORE1 . "<br>";
    $total = 200 + SCORE1;
    echo $total . "<br>";

    define("PI", 3.14);
    $radius = 6;
    $argc = PI * ($radius * $radius);
    echo "พื้นที่วงกลม " . $argc;



    ?>

</body>

</html>