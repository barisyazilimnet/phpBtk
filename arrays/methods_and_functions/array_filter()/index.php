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
    $colors = array("Siyah", "", "Turkuaz", "Kırmızı", "", "", "", "Mavi");

    echo "<pre>";
    print_r($colors);
    echo "</pre>";

    echo "<pre>";
    print_r(array_filter($colors)); // ? anahtarlar korunarak boş olan degerleri silere yeni dizi oluşturur
    echo "</pre>";
    ?>
</body>

</html>