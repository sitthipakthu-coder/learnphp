<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    th,
    td {
        border: 1px solid #ccc;
        text-align: center;
    }
</style>

<body>
    <table>
        <thead>
            <tr>
                <th>ลำดับที่</th>
                <th>เครื่องหมาย</th>
                <th>ลำดับการทำงาน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>new</td>
                <td>ไม่มีความสัมพันธ์</td>
            </tr>
            <tr>
                <td>2</td>
                <td>()</td>
                <td>ไม่มีความสัมพันธ์</td>
            </tr>
            <tr>
                <td>3</td>
                <td>[]</td>
                <td>ไม่มีความสัมพันธ์</td>
            </tr>
            <tr>
                <td>4</td>
                <td>++ , --</td>
                <td>ซ้ายไปขวา</td>
            </tr>
            <tr>
                <td>5</td>
                <td>* , / , %</td>
                <td>ซ้ายไปขวา</td>
            </tr>
            <tr>
                <td>6</td>
                <td>+ , -</td>
                <td>ซ้ายไปขวา</td>
            </tr>
            <tr>
                <td>7</td>
                <td>&lt; , &lt;= , &gt; , &gt;=</td>
                <td>ซ้ายไปขวา</td>
            </tr>
            <tr>
                <td>8</td>
                <td>== , != , === , &lt;&gt;</td>
                <td>ไม่มีความสัมพันธ์</td>
            </tr>
            <tr>
                <td>9</td>
                <td>&amp;&amp; , ||</td>
                <td>ซ้ายไปขวา</td>
            </tr>
            <tr>
                <td>10</td>
                <td>= , += , -= , *= , /=</td>
                <td>ขวาไปซ้าย</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <?php

    $x = 5+8*9;
    $y =10-4+2;
    $z = 5*2-40/5; //(5*2)-(40/5)
    $a = 7+8/2+25;
    echo "5+8*9 = $x<br>";
    echo "10-4+2 = $y<br>";
    echo "5*2-40/5 = $z<br>";
    echo "7+8/2+25 = $a<br>";

    ?>
</body>

</html>