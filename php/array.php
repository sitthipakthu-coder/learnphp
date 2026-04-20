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
    <img src="/img/array.png" height="200" width="400">
    <?php
    $number1 = range(1, 10);
    dump_pre($number1);

    $number2 = range(1, 10, 2);
    dump_pre($number2);
    //7:58:12
    //แบบเดี่ยว
    $number = [10, 20, 30, 10, 20, 30, 40, 10, 20, 30, 40];
    $fruit = ["ส้ม", "มะละกอ", "แอปเปิ้ล", "กล้วย", "ขนุน", "น้อยหน่า", "กล้วย", "องุ่น", "แดงโม"];

    print_r($number);
    echo "<hr>";

    //แบบคู่
    $colors = [
        "yellow" => "สีเหลือง",
        "red" => "สีแดง",
        "orange" => "สีส้ม"
    ];
    $animals = [
        "dog" => "สุนัข",
        "cat" => "แมว",
        "pig" => "หมู",
        "rabbit" => "กระต่าย"
    ];
    echo "<br>";
    echo "<b>การเข้าถึงสมาชิกด้วยฟังก์ชั่น foreach</b>";
    foreach ($colors as $key => $value) {
        echo "$key : $value <br>";
    }

    foreach ($fruit as $datafruit) {
        echo $datafruit . "<br>";
    }
    ?>
    <hr>

    <ul>
        <?php foreach ($animals as $key1 => $value1) { ?>
            <li><?php echo "$value1 : $key1" ?></li>
        <?php } ?>
    </ul>

    <b>Array 2 มิติด้วย For_loop</b>
    <p>Array ที่มีข้อมูลสมาชิกภายในเป็น array (array ซ้อน array)</p>
    <p>มีโครงสร้างเป็นรูปแบบ แถว (แถวนอน) และคอลัมน์ (แนวตั้ง )</p>

    <?php
    $product = [
        ["keyboard", "คีย์บอร์ด", 1500],
        ["mouse", "เมาส์", 900],
        ["speaker", "ลำโพง", 2500],
        ["speaker2", "ลำพูน", 3000]
    ];

    echo $product[1][2];
    echo "<br>ลองใช้ for_loop<br>";
    for ($row = 0; $row < count($product); $row++) {
        echo $row . " <br>";
    }
    echo "<hr>";
    for ($row = 0; $row < count($product); $row++) {
        echo "สินค้า " . $row . "<br>";

        for ($colum = 0; $colum < count($product[$row]); $colum++) {
            echo " รายการ " . $product[$row][$colum] . "<br>";
        }
        echo "<hr>";
    }
    ?>

    <b>Array 2 มิติด้วย Foreach</b><br>
    <?php
    $products = [
        ["keyboard", "คีย์บอร์ด", 1500],
        ["mouse", "เมาส์", 900],
        ["speaker", "ลำโพง", 2500],
        ["speaker2", "ลำพูน", 3000]
    ];
    foreach ($products as $product) {
        echo "รายการสินค้า<br>";
        echo "ชื่อสินค้า (th) = " . $product[1] . "<br>";
        echo "ชื่อสินค้า (eng) = " . $product[0] . "<br>";
        echo "ราคา = " . $product[2] . "<hr>";
    }

    ?>
    <b>Array 2 มิติด้วย Foreach แบบใส่key</b><br>
    <?php
    $products = [
        ["EN" => "keyboard", "TH" => "คีย์บอร์ด", "price" => 1500],
        ["EN" => "mouse", "TH" => "เมาส์", "price" =>  900],
        ["EN" => "speaker", "TH" => "ลำโพง", "price" =>  2500],
        ["EN" => "speaker2", "TH" => "ลำพูน", "price" =>  3000]
    ];
    foreach ($products as $product) {
        echo "รายการสินค้า<br>";
        echo "ชื่อสินค้า (th) = " . $product["TH"] . "<br>";
        echo "ชื่อสินค้า (en) = " . $product["EN"] . "<br>";
        echo "ราคา = " . $product["price"] . "<hr>";
    }
    ?>

    <b>ฟังก์ชั่นเพิ่มและลบสมาชิกใน Array</b>
    <p>array_push() ใช้เพิ่มสมาชิกในตำแหน่งสุดท้าย</p>
    <p>array_pop() ใช้ลบสมาชิกตำแหน่งสุดท้าย</p>
    <p>array_unshift() ใช้เพิ่มสมาชิกในตำแน่งแรก</p>
    <p>array_shift() ใช้ลบสมาชิกในตำแหน่งแรก</p>
    <p>array_splice() ใช้ลบและเพิ่มสมาชิกในตำแหน่งที่ต้องการ</p>
    <?php
    $fruits = ["มะละกอ", "ฝรั่ง", "มะนาว", "ทุเรียน"];
    print_r($fruits);
    echo "<br>";
    array_push($fruits, "มะม่วง");
    print_r($fruits);
    echo "<br>";
    array_pop($fruits);
    print_r($fruits);
    echo "<br>";
    array_unshift($fruits, "แตงโม");
    print_r($fruits);
    echo "<br>";
    array_shift($fruits);
    echo "<hr>";
    print_r($fruits);
    echo "<br>";
    //ใส่เลข 0 ถ้าต้องการเพิ่ม ไม่ใช่การลบหรือแทนที่
    array_splice($fruits, 1, 0, array("องุ่น", "ฝรั่ง"));
    print_r($fruits);
    echo "<br>";
    array_splice($fruits, 1, 2);
    print_r($fruits);
    ?>
    <hr>
    <b>ฟังก์ชั่นเรียงลำดับ Array แบบเดี่ยว</b>
    <p>sort() เรียงจากน้อยไปมาก ถ้าเป็นข้อความเรียกจากพยัญชนะไปสระ</p>
    <p>rsort() เรียงจากมากไปน้อย ถ้าเป็นข้อความเรียกจากสระไปพยัญชนะ</p>
    <?php
    print_r($number);
    echo "<br>";
    rsort($number);
    echo "<br>";
    print_r($number);
    echo "<hr>";
    print_r($fruits);
    echo "<br>";
    rsort($fruits);
    echo "<br>";
    print_r($fruits);
    ?>
    <hr>
    <b>ฟังก์ชั่นเรียงลำดับ Array แบบจับคู่</b>
    <p>asort() เรียงข้อมูลจากน้อยไปมาก</p>
    <p>arsort() เรียงข้อมูลจากมากไปน้อย</p>
    <p>ksort() เรียง index จากน้อยไปมาก</p>
    <p>krsort() เรียง index จากมากไปน้อย</p>

    <?php

    $number = [10, 2, 3, 45, 150, 60, -10, 30, 40, 50, 60, 70];
    $city = ["ชลบุรี", "ระยอง", "ระนอง", "กาญจบุรี", "เชียงใหม่", "นครพนม", "มุกดาหาร", "กาฬสินธุ์"];

    $arr = ["A" => 20, "C" => 15, "B" => 30, "D" => 25];
    $country = ["TH'" => "ไทย", "Jp" => "ญี่ปุ่น", "US" => "สหรัฐอเมริกา", "CN" => "จีน"];

    //เรียงข้อมูล
    echo "เรียงตัวเลขแบบปกติ ";
    print_r($arr);
    echo "<br>";
    echo "เรียงตัวเลขจากน้อยไปมาก ";
    asort($arr);
    print_r($arr);
    echo "<br>";
    arsort($arr);
    echo "เรียงตัวเลขจากมากไปน้อย ";
    print_r($arr);
    echo "<hr>";

    echo "เรียงคำแบบปกติ ";
    print_r($country);
    echo "<hr>";
    echo "<br>";
    echo "เรียงคำจากน้อยไปมาก ";
    asort($country);
    print_r($country);
    echo "<br>";
    arsort($country);
    echo "เรียงคำจากมากไปน้อย ";
    print_r($country);
    //เรียง key หรือ index
    echo "<br><hr>";
    print_r($arr);
    echo "<br>";
    ksort($arr);
    print_r($arr);
    echo "<br>";
    krsort($arr);
    print_r($arr);
    ?>
</body>

</html>