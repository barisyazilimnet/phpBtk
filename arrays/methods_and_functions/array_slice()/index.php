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
    $array1 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", "Gülşah KARATAŞ", "Hilal YALÇIN", "Gamze DEMİRCİOĞLU");
                // !     0              1           2           3                   4                5
                // !     -6             -5          -4          -3                  -2              -1

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    echo "<pre>";
    print_r(array_slice($array1, 2)); // ? dizinin 2. indis dahil olmak üzere sonrasını ekranda gösterir
    echo "</pre>";

    echo "<pre>";
    print_r(array_slice($array1, 3, 2)); // ? dizinin 3. indis dahil olmak üzere sonrasından 2 taneyi ekranda gösterir
    echo "</pre>";

    echo "<pre>";
    print_r(array_slice($array1, -2, 2)); // ? dizinin -2. indis dahil olmak üzere sonrasından 2 taneyi ekranda gösterir
    echo "</pre>";

    echo "<pre>";
    print_r(array_slice($array1, -2, 2, true)); // ? dizinin -2. indis dahil olmak üzere sonrasından 2 taneyi ekranda gösterir. sondaki true degeri anahtar degerlerini korumak için
    echo "</pre>";
    ?>
</body>

</html>