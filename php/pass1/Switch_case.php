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

    <b>แบบมีเงื่อนไข (Condition)</b>
    <p>กลุ่มคำสั่งที่ใช้ตัดสินใจในการเลือกเงื่อนต่างๆ ภายในโปรแกรมมาทำงาน</p>

    <b>Switch..Case</b>
    <p>Switch เป็นคำสั่งมี่ใช้กำหนดเงื่อนไขคล้ายๆกับ if แต่จะเลือกเพียงหนึ่งทางเลือกออกมาทำงานโดยนำค่าในตัวแปรมากำหนดเป็นทางเลือกผ่านคำสั่ง case</p>
    <p>---------------------------------------------------------------------------------------</p>
    <?php

    $year = 15;

    switch ($year) {
        case 5:
            echo "ระยะเวลากู้ " . $year . "คิดดอกเบี้ย 10%";
            break;
        case 10:
            echo "ระยะเวลากู้ " . $year . " คิดดอกเบี้ย 20%";
            break;
        default:
            echo "ไม่เข้าเงื่อนไขทีกำหนด";
    }

    ?>
</body>

</html>