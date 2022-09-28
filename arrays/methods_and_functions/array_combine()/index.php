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
    $array1 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN");
    $array2 = array("Gülşah KARATAŞ", "Hilal YALÇIN", "Gamze DEMİRCİOĞLU");
    $total_array = array_combine($array1, $array2); //? dizileri birleştirmek için kullanılır. ancak ilişkisel sekilde yapılır. 
    // ? ilk dizinin degerlerini anahtar olarak ikinci dizideki degerleri normal deger olarak alır

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    echo "<pre>";
    print_r($total_array);
    echo "</pre>";
    ?>
</body>

</html>