<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <style>
        p{
            margin:0;
        }
    </style>
</head>
<body>

    <b>Type Casting</b>
    <p>คือ การเปลี่ยนชนิดของข้อมูลให้เป็นชนิดที่ต้องการโดยใส่ชนิดข้อมูลของตัวแปรไว้ในวงเล็บหน้าตัวแปรที่ต้องการจะเปลี่ยนชนิดของข้อมูบ</p>
    <p>---------------------------------------------------------------------------------------</p>
<?php

    $price = "1000.20";
        echo "ก่อนเปลี่ยน ".gettype($price)."<br>";
        // settype($price,"int");
    $dalivery =  50.70;

     $total = ($price + $dalivery);
    echo "รวมราคา $total<br >";
    echo gettype (" d $total ")."<br>";
    settype($total,"int");
    echo $total."<br>";
    echo gettype ($total);
    
?>
    
</body>
</html>