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
    <p>ชนิดของข้อมูล</p>
    <p>1.Integer คือ เลขจำนวนเต็ม เช่น 1 2 3 (เลขฐาน 10 8 16)</p>
    <p>2.Folat/Double เลขจำนวนจริงหรือทศนิยม 1.23 3.14</p>
    <p>3.Boolean ข้อมูลทางตรรกศาสตร์ เช่น จริง(True), เท็จ(False)</p>
    <p>4. String ข้อมูลตัวอักษรหรือกลุ่มข้อความอยู่ในภายใน ""</p>
    <p>5.Array ชุดหรือกลุ่มข้อมูลที่มีชนิดเดียวกัน</p>
    <p>6.Object การกพหนดให้ตัวแปรนั้นเก็บคุณสมบัติของ Object (Attribut & Method) โดยการประกาศใช้งานผ่าน Colass (OOP)</p>
    <p>---------------------------------------------------------------------------------------</p>
    <?php
    $price = 50; //Integer
    $score = 90.58; //Folat/Double
    $name = "Tang"; //String
    $isvaild = true; //Boolean
    $nonisvaild = false; //Boolean

    echo $price . "<br>";
    echo $score . "<br>";
    echo $name . "<br>";
    echo $isvaild . "<br>";
    echo $nonisvaild . "<br>";

    $price += 100;
    echo $price . "<br>";
    ?>
</body>

</html>