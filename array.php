<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <b>Array คือ</b>
    <p>ตัวแปรที่ใช้ในการเก็บข้อมูลที่มีลำดับที่ต่อเนื่อง ซึ่งข้อมูลมีหลายค่าได้ โดยใช้ชื่ออ้างอิงชื่อเดียวและใช้หมายเลขกำกับ Index ให้กับตัวแปรเพื่อจำแนกความแตกตางของตัวแปรแต่ละตัว</p>
    <hr>
    <b>โครงสร้างของ Array</b>
    <p>1.ข้อมูลที่อยู่อาร์เรย์จะเรียกว่าสมาชิก หรือ อิลิเมนต์ (element)</p>
    <p>2.แต่ละอิลิเมนต์ (element) จะเก็บค่าข้อมูล (value) และอินเด็กซ์ (Index) เอาไว้</p>
    <p>3. Index คือคีย์ของอาร์เรย์ใช้อ้างอิงตำแหน่งของ element</p>
    <p>4.Index เป็นได้ทั้งตัวเลขหรือตัวอักษร (keys)</p>
    <p>5.สมาชิกใน array ต้องมีชนิดข้อมูลเหมือนกัน</p>
    <p>6.สมาชิกใน array จะถูกคั่นด้วยเครื่องหมาย comma</p>
    <hr>
    <b>ประเภทของ Array</b>
    <p>1.Array แบบเดี่ยว</p>
    <p>2.Array แบบจับคู่ (Associate)</p>
    <b>รูปแบบการสร้าง Array</b>
    <p>1.ใช้ฟังก์ชั่น array</p>
    <p>2.ใช้ฟังก์ชัน range</p>
    <p>3.ใช้ศักลักษณ์กล้ามปู []</p>
    <hr>
    <?php
    $n1 = 1;
    $n2 = 2;
    $n3 = 3;

    echo $n1 . "<br>";
    echo $n2 . "<br>";
    echo $n3 . "<br><hr>";
    //Array แบบเดี่ยว
    $number = [10, 20, 30, 40, 50];
    $city = ["นนทบุรี", "กรุงเทพ", "ระยอง"];
    function dump_pre($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    dump_pre($city);
    dump_pre($number);

    $city[0] = "เชียงใหม่";
    dump_pre($city);
    echo "<hr>";
    $total = $number[0] + $number[1];
    echo $total;
    ?>

    <hr>

    <?php
    //แบบจับคู่
    $room = ["A01" => "สมชาย", "A02" => "สมหมาย", "A03" => "สมปอง"];
    dump_pre($room);

    echo $room["A01"] . "<br>";

    $animal = ["หมา", "แมว", "หมู"];
    echo $animal[0];
    echo "<br>";

    ?>
    <img src="/php/img/array.png" height="200" width="400">

    <?php
    $number1 = range(1, 10);
    dump_pre($number1);

    $number2 = range(1, 10, 2);
    dump_pre($number2);
    //7:58:12
    ?>

</body>

</html>