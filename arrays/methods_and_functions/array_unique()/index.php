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
    $colors = array("Siyah", "Sarı", "Turkuaz", "Kırmızı", "Siyah", "Beyaz", "Kırmızı", "Mavi");

    echo "<pre>";
    print_r($colors);
    echo "</pre>";

    echo "<pre>";
    print_r(array_unique($colors)); // ? anahtar degerleri korunarak aynı olan degerleri silerek yeni dizi oluşturur
    echo "</pre>";
    ?>
</body>

</html>