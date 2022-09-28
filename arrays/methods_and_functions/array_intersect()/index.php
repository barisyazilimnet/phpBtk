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

    $array1 = array("Barış KURT", "Ali ÜSTÜN", "Ali TOPCU", "Semih ACAR", "Erkan TAŞ");
    $array2 = array("Gülşah KARATAŞ", "Gamze DEMİRİOĞLU", "Hilal YALÇIN", "Semih ACAR", "Erkan TAŞ");
    
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    
    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    echo "<pre>";
    print_r(array_intersect($array1, $array2)); // ? anahtar degerleri korunarak degerleri eşlesenlerden yeni bir dizi oluşturur
    echo "</pre>";

    echo "<pre>";
    print_r(array_intersect_key($array1, $array2)); // ? anahtar degerleri eşlesenlerden yeni bir dizi oluşturur. ilk dizideki degerler geçerli olur
    echo "</pre>";

    echo "<pre>";
    print_r(array_intersect_assoc($array1, $array2)); // ? hem anahtar degerleri hemde degerleri eşlesenlerden yeni bir dizi oluşturur. ilk dizideki degerler geçerli olur
    echo "</pre>";

    ?>
</body>

</html>