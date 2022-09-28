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
    $colors = array("Mavi", "Turkuaz", "Kırmızı", "Siyah");

    // ! anahtarlı kullanılacaksa
    //? dizi degişkeni as dizideki anahtarların atanacagı degişken => dizi elemanlarının atanacagı deger
    //! anahtarsız kullanılacaksa
    //? dizi degişkeni as dizi elemanlarının atanacagı deger
    foreach ($colors as $key => $value) {
        echo "Dizinin <strong>" . $key + 1 . ".</strong> elemanı <strong>" . $value . "</strong> renktir<br />";
    }
    ?>
</body>

</html>