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
    <b>ฟังก์ชั่น </b>
    <p>คือ ชุดคำสั่งที่เขียนมารวมกันไว้เพื่อเรียใช้งาน เพื่อลดความซ้ำซ้อนคำสั่งที่ถูกเรียกใช้บ่อยๆ ฟังก์ชั่นสามารถนำไปใช้ได้ทุกที่และแก้ไขทีหลังได้</p>
    <hr>
    <b>ฟังก์ชั่นมาตรฐาน</b>
    <p>ฟังก์ชันมาตราฐาน (Built-in Function) ฟังก์ชั่นที่มีอยู่ในภาษา PHP ผู้ใช้สามารถเรียกใช้งานได้เลย</p>
    <p>ฟังก์ชั่นที่ผู้ใช้สร้างขึ้นเอง (User-Define Function) คือฟังก์ชั่นที่ถูกสร้างขึ้นมาเพื่อวัตถุประสงค์ให้ทำงานที่ผู้ใช้ต้องการ
    </p>

    <hr>
    <b>กฏการตั้งชื่อฟังก์ชั้่น</b>
    <p>1.ชื่อฟังก์ชั่นต้องไม่ซ้ำกัน</p>
    <p>2.ชื่อฟังก์ช์ชันสามารถเป็นตัวอักษร ตัวเลข หรือขีดเส้นล่าง(underscores)</p>
    <p>3.ชื่อของฟังก์ชันต้องไม่ขึ้นด้วยตัวเลข</p>

    <hr>
    <?php
    echo "<b>ฟังก์ชั่นที่ผู้ใช้สร้างขึ้นเอง (User-Define Function)</b><br>";
    echo show();

    function show()
    {
        echo "Hello PHP<br>";
        echo "<hr>";
    }

    ?>

    <p>ฟังก์ชั่นที่มีการรับค่าเข้ามาทำงาน</p>
    <p>อาร์กิวเมนต์ คือ ตัวแปรหรือค่าที่ต้องการส่งมาให้กับฟังก์ชัน(ตัวแปรส่ง)</p>
    <p>พารามิเตอร์ คือ ตัวแปรที่ฟังก์ชันสร้างไว้สำหรับรับค่าที่จะส่งเข้ามาให้ฟังงก์ชัน (ตัวแปรรับ)</p>

    <?php

    function show1($message) //พารามิเตอร์
    {

        echo "Hello " . $message . "<br>";
    }

    show1("Tang"); //อาร์กิวเมนต์

    function add($a, $b, $d)
    {
        $c = $a + $b + $d;
        $e = $a + $b;
        echo "$a + $b +$d = " . $c . "<br>";
        echo "$a + $b = " . $e . "<br>";
    }

    add(10, 20, 30);

    $x = 50;
    $y = 40;
    $z = 20;
    add($x, $y, $z);

    echo "<hr>";
    ?>

    <?php

    echo "ฟังก์ชั่นที่มีการส่งค่าออกมา<br>";

    function getAddress()
    {
        $addres = "ระยอง";
        return  $addres;
    }

    $myCity = getAddress();

    echo "My address " . $myCity . "<br>";

    function getBonus()
    {
        return 5000;
    }

    $bonus = getBonus();
    echo "จำนวนโบนัส " . getBonus() . "<br>";
    $satary = 10000 + $bonus;
    echo "โบนัสรวมเงินเดือน = " . $satary;
    echo "<hr>";
    ?>
    <?php


    ?>


</body>

</html>