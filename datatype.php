<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            margin: 0 0;
        }
    </style>
</head>

<body>
    <p>ชนิดข้อมูลของตัวแปร </p>
    <p>1.Integer ตัวเลขจำนวนเต็ม</p>
    <p>2.Float/Double เลขจำนวนจริงหรือทศนิยม</p>
    <p>3.Boolean ข้อมูลตรรกศาสตร์มีค่าเป็น True และ Flase</p>
    <p>4.String ตัวอักษรหรือกลุ่มข้อความ</p>
    <p>5.Array กลุ่มหรือชุดข้อมูลที่มีชนิดเดียวกัน</p>
    <p>6.Object การกำหนดให้ตัวแปรนั้นเก็บคุณสมบัติของ Object (Attribute & Method) โดยประกาศใช้งานผ่าน Class (OOP)</p>
    <hr>
    <?php

    $price = 50;
    $score = 50.5;
    $name = "Sitthipak";
    $isvalid = false;

    echo $name."<br>";
    echo $price."<br>";
    echo $score."<br>";
    echo $isvalid."<br>";

    $price = $price * 50;
    echo $price."<br>";
    ?>
</body>

</html>