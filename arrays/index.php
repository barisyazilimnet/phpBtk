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
    //? sabit diziler
    define("arrays", array("Barış KURT", "Gülşah KARATAŞ", "Beyhan OGUZ"));
    echo "<pre>";
    print_r(arrays);
    echo "</pre>";

    // ? dizi birleştirme
    //! aynı olan anahatarlara sahip degerler varsa ilk dizideki degeri alır ikinci dizideki deger siler
    $array1 = array("Barış KURT");
    $array2 = array("Gülşah KARATAŞ", "Beyhan OGUZ");
    $total_array = $array1 + $array2;
    echo "<pre>";
    print_r($total_array);
    echo "</pre>";
    ?>
</body>

</html>