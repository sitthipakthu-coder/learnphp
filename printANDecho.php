<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>printANDecho</title>
</head>

<body>
    <?php
    echo "Sitthipak<br>";
    echo "Tgungsiri";
    $name = "TANG";
    ?>
    <h3>print และ echo ต่างกันยังไง</h3>
    <p>1.print มีการส่งกลับมา (return) แต่ echo จะไม่มีการส่งค่ากลับมา (void)</p>
    <p>2.print สามารถระบุค่าได้ตัวเดียว แต่ echo จะมีหลายตัว</p>
    <p>3.echo เร็วกว่า print</p>
    <form action="">
        <label for="">ชื่อ</label>
        <input type="text"name="" id="" value="<?php echo $name ?>"> <br>
        <label for="">นามสกุล</label>
        <input type="text">
    </form>
    

</body>

</html>