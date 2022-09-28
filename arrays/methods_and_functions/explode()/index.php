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
        $names = "Barış KURT,Gülşah KARATAŞ,Beyhan OGUZ";
        echo "<pre>";
        print_r(explode(",", $names)); // ? dizi haline getirir.
        echo "</pre>";
        echo "<pre>";
        print_r(explode(",", $names, 2)); // ? dizi haline getirir ve en fazla 2 elemanlı olabilir.
        echo "</pre>";
        echo "<pre>";
        print_r(explode(",", $names, -1)); // ? dizi haline getirir ve sondan 1 elemanı siler.
        echo "</pre>";
    ?>
</body>
</html>