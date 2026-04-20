<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $width = 10;
    $height = 30;

    if ($width > 0 && $height > 0) {
        $area = $width * $height;
        echo "มีพื้นที่ = " . $area;
    } else {
        echo "ต้องมีพื้นที่มากกว่า 0";
    }

    ?>
</body>

</html>