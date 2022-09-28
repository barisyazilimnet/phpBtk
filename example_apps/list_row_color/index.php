<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "");
    ?>
    <table style="width: 75%; margin:0 auto; text-align:center;">
        <tr style="background-color: #000; color:#fff; height: 25px;">
            <td>Ürün adı</td>
            <td> Ürün fiyatı</td>
        </tr>
        <?php
        $query = $mysqli->query("SELECT * FROM php_btk.products");
        echo $mysqli->error;
        $number = 0;
        while ($result = $query->fetch_object()) {
            $bgcolor = ($number % 2 == 1) ? "#dfdfdf" : "#fff";
        ?>
            <tr onmouseover="this.bgColor='#c2cedb';" onmouseout="this.bgColor='#fff';">
                <!--  style="background-color: <?php //echo $bgcolor ?>;" onmouseout="this.bgColor='<?php //echo $bgcolor ?>';"-->
                <td><?php echo $result->product_name; ?></td>
                <td><?php echo $result->product_price; ?></td>
            </tr>
        <?php $number++;
        } ?>
    </table>
</body>

</html>