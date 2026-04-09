<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <style>
        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <b>ฟังก์ชันที่ทำงานเกี่ยวกับตัวแปร</b>
    <p>1. isset คือฟังกืชั่นสำหรับตรวจสอบว่าตัวแปรมีการกำหนดค่าหรือไม่ ถ้ากำหนดจะมีค่าเป็น True(1) ถ้่าไม่กำหนดจะมีค่าเป็น False</p>
    <p>2. unset ยกเลิกตัวแปรและคืนค่าให้หน่วยความจำ</p>
    <p>3.empty ฟังก์ชั่นสำหรับตรวจสอบว่าตัวแปรมีค่าว่างหรือเลขศูนย์หรือไม่ถ้าเป็นค่าว่างจะเป็น True(1) ถ้าไม่เป็นค่าว่างจะเป็น False</p>
    <p>4.is_null ฟังก์ชั่นสำหรับตรวจสอบว่าตัวแปรมีค่าว่างหรือไม่</p>
    <p>5.print_r() ฟังก์ชั่นสำหรับแสดงค่าตัวแปรใน array</p>
    <p>6.var_dump() แสดงรายละเอียดตัวแปร</p>
    <p>--------------------------------------------------------------------------------------------------------------------------------</p>


    <?php
    $total1 = null;
    $total2 = "";
    $total3 = 0;
    $total4 = "Tang";

    echo "ค่าของตัวแปร total1 = " . $total1 . "<br>";
    echo "ค่าของตัวแปร total2 = " . $total2 . "<br>";
    echo "ค่าของตัวแปร total3 = " . $total3 . "<br>";
    echo "ค่าของตัวแปร total4 = " . $total4 . "<br>";

    echo "--------------------------------------------------------------------------------------------------------------------------------<br>";

    echo "ค่าของตัวแปร total1 ใช้ settype = " . isset($total1) . "<br>";
    echo "ค่าของตัวแปร total2 ใช้ settype = " . isset($total2) . "<br>";
    echo "ค่าของตัวแปร total3 ใช้ settype = " . isset($total3) . "<br>";
    echo "ค่าของตัวแปร total4 ใช้ settype = " . isset($total4) . "<br>";

    unset($total4);
    echo "ค่าของตัวแปร total4 ใช้ unset = " . isset($total4) . "<br>";

    echo "--------------------------------------------------------------------------------------------------------------------------------<br>";
    $total4 = "Tang";
    echo "ค่าของตัวแปร total1 ใช้ empty = " . empty($total1) . "<br>";
    echo "ค่าของตัวแปร total2 ใช้ empty = " . empty($total2) . "<br>";
    echo "ค่าของตัวแปร total3 ใช้ empty = " . empty($total3) . "<br>";
    echo "ค่าของตัวแปร total4 ใช้ empty = " . empty($total4) . "<br>";

    echo "--------------------------------------------------------------------------------------------------------------------------------<br>";
    echo "ค่าของตัวแปร total1 ใช้ is_null = " . is_null($total1) . "<br>";
    echo "ค่าของตัวแปร total2 ใช้ is_null = " . is_null($total2) . "<br>";
    echo "ค่าของตัวแปร total3 ใช้ is_null = " . is_null($total3) . "<br>";
    echo "ค่าของตัวแปร total4 ใช้ is_null = " . is_null($total4) . "<br>";

    echo "--------------------------------------------------------------------------------------------------------------------------------<br>";

    echo var_dump($total1) . "<br>";
    echo var_dump($total2) . "<br>";
    echo var_dump($total3) . "<br>";
    echo var_dump($total4) . "<br>";

    echo "--------------------------------------------------------------------------------------------------------------------------------<br>";



    ?>

</body>

</html>