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
    <b>if..else แบบลดรูป (Ternary Operator)</b>
    <p>เงื่อนไข ? คำสั่งเมื่อเงื่อนไขเป็นจริง : คำสั่งเมื่อเงื่อนไขเป็นเท็จ;</p>

    <?php

    $a = 10;
    $b = 20;
    //แบบปกติ
    // if ($a > $b) {
    //     echo $a . " > " . $b;
    // } else {
    //     echo $a . " < " . $b;
    // }

    //ลดรูป

    // echo =  $a > $b ?  $a . " > " . $b :  $a . " < " . $b; วิธีแรก
    $c =  $a > $b ?  $a . " > " . $b :  $a . " < " . $b; //วิธีที่สอง
    echo $c;

    ?>
</body>

</html>