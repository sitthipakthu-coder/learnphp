<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>แบบทำซ้ำ (Loop)</b>
    <p>กลุ่มคำสั่งที่ใช้ในการวนรอบ (Loop) โปรแกรมจะทำงานไปเรื่อยๆจนกว่าเงื่อนไขที่กำหนดไว้จะเป็นเท็จ จึงหยุดทำงาน</p>
    <p>1. While</p>
    <p>2.For</p>
    <p>3.Do..While</p>
    <hr>

    <?php
    echo "1. While_Loop<br>";

    $count = 1;
    $limit = 10;

    while ($count <= $limit) {
        echo "รอบที่" . $count . "<br>";
        $count++;
    }
    echo "จบการทำงาน<br>";

    echo "<hr>";
    $count = 1;
    while ($count <= $limit) {
        echo "<li>อาหารที่ $count</li>";
        $count++;
    }

    ?>

    <p>รายการอาหาร</p>

    <select name="" id="">
        <?php $count = 1;
        while ($count <= $limit) {
        ?>
            <option value=" <?php echo $count; ?>">
                รายการที่ <?php echo $count; ?>
            </option>
        <?php
            $count++;
        }
        ?>
    </select>
    <br>
    <?php
    echo "-<hr>";
    echo "2. For_loop<br>";
    echo "เป็นรูปแบบที่ใช้ตรวจสอบเงื่อนไข มีการกำหนดค่าเริ่มต้นและเปลี่ยนไปพร้อมๆกัน โดยเมื่อเงื่อนไขเป็นจริงจะทำงานตามคำสั่งไปเรื่อยๆ<br>";
    echo "for(ค่าเริ่มต้นของตัวแปร; เงื่อนไข ; เปลี่ยนแปลงค่าตัวแปร)<br>";


    for ($i = 1; $i <= 10; $i++) {
        echo "รอบที่ " . $i . "<br>";
    };

    ?>

    <?php
    echo "<hr>";
    echo "<b> 3.คำสั่ง Do..While </b><br>";
    echo "โปรแกรมจะทำงานตามคำสั่งอย่างน้อย 1 รอบ หลังทำเสร็จแล้วจะตรวจสอบเงื่อนไขคำสั่ง while ถ้าเงื่อนไขเป็นจริงจะวนกลับขึ้นไปทำงานใหม่อีกครั้ง แต่ถ้าเป็นเท็จจะหลุดออกจากลูป<br>";
    echo "ตัวอย่าง do{ คำสั่งต่างๆเมื่อเงื่อนไขเป็นจริง;}while(เงื่อนไข)<br>";
    $num = 1;
    $limit = 5;
    do {
        echo "Hello No. " . $num . "<br>";
        $num++;
    } while ($num <= $limit);
    echo "<hr>";

    echo "<b>ข้อแตกต่างและการใช้งาน Loop</b><br>";
    echo "1.For ใช้ในกรณีรู้จำนวนรอบที่ชัดเจน<br>";
    echo "2.While ใช้ในกรณีที่ไม่รู้จำนวนรอบ<br>";
    echo "3.Do..while ใช้ในกรณีที่อยากให้ลองทำก่อน 1 รอบ แล้วทำซ้ำไปเรื่อยๆเท่าที่เงื่อนไขเป็นจริง<br>";

    echo "<hr>";

    echo "คำสั่งที่เกี่ยวข้องกับ Loop";
    echo "1.break ถ้าโปรแกรมพบคำสั่งนี้จะหลุดออกจากลูกทันที<br>";
    echo "2.continum คำสั่งนี้จะทำให้หยุดการทำงานแล้วย้อนกลับไปเริ่มต้นการทำงานลูปใหม่<br>";
    echo "3.exit คำสั่งให้โปรแกรมหยุดทำงาน(ใช้ในกรณีที่มีข้อผิดพลาดเกิดขึ้นในโปรแกรม จะออกจากการทำงานของโปรแกรมทั้งหมด<br>";
    echo "1.break <br>";
    for ($a = 1; $a <= 10; $a++) {
        echo "รอบที่" . $a . "<br>";
        if ($a == 5)
            break;
    }
    echo "<hr>";
    echo "2.continum <br>";
    for ($a = 1; $a <= 10; $a++) {
        if ($a == 5)
            continue;
        echo "รอบที่" . $a . "<br>";
    }

    echo "<hr>";
    echo "3.exit <br>";
    for ($a = 1; $a <= 10; $a++) {
        echo "รอบที่" . $a . "<br>";
    }
    exit;
    echo "จบการทำงาน";
    ?>


</body>

</html>