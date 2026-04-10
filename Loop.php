<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>แบบทำซ้ำ (Loop)</b>
    <p>กลุ่มคำสั่งที่ใช้ในการวนรอบ (Loop) โปรแกรมจะทำงานไปเรื่อยๆจนกว่าเงื่อนไขที่กำหนดไว้จะเป็นเท็จ จึงหยุดทำงาน</p>
    <p>1. While</p>
    <p>2.For</p>
    <p>3.Do..While</p>
    <p>---------------------------------------------------------------------------------------</p>

    <?php
    echo "1. While_Loop<br>";

    $count = 1;
    $limit = 10;

    while ($count <= $limit) {
        echo "รอบที่" . $count . "<br>";
        $count++;
    }
    echo "จบการทำงาน<br>";

    echo "---------------------------------------------------------------------------------------";
    $count = 1;
    while ($count <= $limit) {
        echo "<li>$count</li>" . "GG";
        $count++;
    }
    ?>
</body>

</html>