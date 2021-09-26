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
        echo "<pre>";
        print_r(array_fill(50, 5, "Barış KURT")); // ? 50. indisden başlayarak 5 elemanlı elemanları "Barış KURT" olan bir dizi oluşturur
        echo "</pre>";

        $darlings = array("Beyhan OĞUZ", "Gülşah KARATAŞ");

        echo "<pre>";
        print_r($darlings);
        echo "</pre>";

        echo "<pre>";
        print_r(array_fill_keys($darlings, "Barış KURT")); // ? darlings degişkenindeki dizinin elemanları anahtar olarak algılayarak eleman degerleri "Barış KURT" olan bir dizi oluşturur
        echo "</pre>";

    ?>
</body>
</html>