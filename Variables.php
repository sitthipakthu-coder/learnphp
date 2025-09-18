<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            margin: 0 0;
        }
    </style>
</head>
<body>

    <p>ตัวแปร (Variables) ใช้สำหรับเก็บค่าข้อมูลไว้ในตัวแปรเพื่อใช้ในการประมวลผล เช่น ตัวเลข ตัวอักษร กลุ่มข้อความหรือกลุ่มข้อมูล (Arry)</p>
    <p>โครงสร้าง $ ชื่อตัวแปร = ค่าของตัวแปรหรือข้อมูล</p>
    <p> 1.สามารเป็นได้ทั้งตัวใหญ่ตัวเล็ก ตัวเลข สัญลักษณ์ _(underscores) และ $(doller sign)</p>
    <p>2.อักษรตัวแรกห้ามเป็นตัวเลข</p>
    <p>3.ตัวแปร ตัวเล็กตัวใหญ่ มีความหมายต่างกัน</p>
    <p>4.ไม่ซ้ำกับ buit-in function (ฟังก์ชั่นมาตรฐานใน PHP)</p>
    <p>5.ตัวแปรขึ้นต้นด้วย $(doller sign)</p>
    <p>6.ตัวแปรไม่สามารถเว้นวรรคได้ หรือเคาะบรรทัดได้</p>

    <hr>
    <?php

        $name = "Sitthipak";
        $age123_ = 22;
        $total = 500;
        $TOTAL = 1000;

        echo $name."<br>";
        echo $age123_."<br>";
        echo $TOTAL."<br>";
        echo "อายุรวม = ".$age123_ +20;

    ?>
</body>
</html>