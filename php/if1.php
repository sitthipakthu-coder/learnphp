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

        img {
            height: 300px;
            width: 500px;
        }
    </style>
</head>

<body>

    <b>แบบมีเงื่อนไข (Condition)</b>
    <p>กลุ่มคำสั่งที่ใช้ตัดสินใจในการเลือกเงื่อนไขต่างๆ ภายในโปรแกรมมาทำงาน</p>
    <p>1.if 2.Switch..Case</p>
    <b>รูปแบบคำสั่งเงื่อนไขเดียว</b>
    <p>if statement </p>
    <p>เป็นคำสั่งที่ใช้กำหนดเงื่อนไขในการตัดสินใจทำงานของโปรแกรมถ้าเงื่อนไขเป็นจริงจะทำตามคำสั่งนั้นๆที่กำหนดภายใต้เงื่อนไขนั้นๆ</p>
    <p>---------------------------------------------------------------------------------------</p>
    <?php

    $balance = 1000;
    $transfcr = 1000;

    if ($transfcr <= $balance) {
        echo "เงินในบัญชี $balance<br>";
        $balance -= $transfcr;
        echo "มีเงินคงเหลือ $balance <br>";
    }
    echo "จบโปรแกรม"

    ?>

</body>

</html>