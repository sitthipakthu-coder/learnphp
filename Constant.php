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
    <h3>ค่าคงที่ (Constant)</h3>
    <p>การสร้างตัวแปรที่เก็บข้อมูลให้ไม่สามารถเปลี่ยนค่าได้ เช่น</p>
    <p>define(ชื่อตัวแปร,ค่าที่กำหนด) > define (name , "Sitthipak")</p>
    <hr>

    <?php

        define("SCORE",100);
        define("PI",3.14);
        $score = SCORE+200; 
        echo $score."<br>";

        $readius = 6;
        $area = PI * 6*6;

        echo "พื้นที่วงกลม " . $area . " ตารางเมตร";

    ?>
</body>
</html> 