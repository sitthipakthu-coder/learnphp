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
    <b>ฟังก์ชั่นเกี่ยวกับ index และ value</b>
    <p>array_keys() - ดึง index ทั้งหมดของ Array</p>
    <p>array_values() - ดึง value ทั้งหมดของ Array</p>
    <p>array_flip() - สลับ index กับ value</p>
    <p>array_unique() - ลบค่าข้อมูลซ้ำใน Array</p>

    <?php
    //แบบเดี่ยว
    $number = [10, 20, 15, 30, 30, 20];
    //แบบคู่
    $country = ["TH'" => "ไทย", "JP" => "ญี่ปุ่น", "US" => "สหรัฐอเมริกา", "CN" => "จีน", "US" => "สหรัฐอเมริกา"];
    $country_key = array_keys($country);
    $country_values = array_values($country);
    echo "ดึง key ทั้งหมดของ Array ด้วย array_keys <br>";
    print_r($country_key);
    echo "<br>";
    echo "ดึง index ทั้งหมดของ Array ด้วย array_values <br>";
    print_r($country_values);

    echo "<hr>";
    echo "แบบปกติ <br>";
    print_r($country);
    echo "<br>";
    $resull = array_flip($country);
    print_r($resull);
    echo "<br>";
    print_r($country);
    echo "<br>";
    echo "<hr>";
    print_r($number);
    echo "<br>";
    $resum = array_unique($number);
    print_r($resum);
    echo "<hr>";
    ?>
    <b>ฟังก์ชั่นการค้นหาข้อมูลใน Array</b>
    <p> array_key_exists() - ตรวจสอบว่ามี Index นี้ใน Array หรือไม่</p>
    <p> in_array() - ตรวจสอบว่ามี value นี้ใน Array หรือไม่</p>
    <?php
    echo " number ";
    print_r($number);
    echo "<br>";
    echo " country ";
    print_r($country);
    echo "<br>";
    if (array_key_exists("JP", $country)) {
        echo "Yes data";
    } else
        echo "No data";;
    echo "<br>";
    if (in_array("ไทย3", $country)) {
        echo "พบค่า";
    } else
        echo "ไม่พบค่า";
    ?>
    <hr>
    <b>ฟังก์ชั่นการรวม Array</b>
    <p>array_mergr() - array หากมี index ที่ซ็ำกันจะนำค่าข้อมูล Array ชุดหลังมาทับข้อมูล Array ชุดแรก </p>
    <p>array_merge_recursive() - รวม Array หากมี Index ที่ซ้ำกันจะนำค่าข้อมูล Array ชุดหลังมาต่อท้ายข้อมูล Array ชุดแรก </p>
    <p>array_combine() - รวม array โดยใช้ Array ตัวแรกเป็น index และใช้ Array ตัวที่สองเป็น Value</p>

    <?php
    $arr1 = ["product" => "โต๊ะ", "color" => "สีส้ม", "price" => 100];
    $arr2 = ["discount" => 100, "delivery" => 30];
    echo "ฟังก์ชั่นการรวม Array array_merge<br>";
    $result1 = array_merge($arr1, $arr2);
    print_r($result1);
    echo "<br>";
    echo "ฟังก์ชั่นการรวม Arrayarray_merge_recursive() <br>";
    $result2 = array_merge_recursive($arr1, $arr2);
    print_r($result1);
    echo "<br>";
    echo "ฟังก์ชั่นการรวม Arrayarray array_combine()<br>";
    $arr3 = ["dog", "cat", "pig", "ant"];
    $arr4 = ["หมา", "แมว", "หมู", "มด"];
    $result3 = array_combine($arr3, $arr4);
    print_r($result3);
    ?>
</body>





</html>