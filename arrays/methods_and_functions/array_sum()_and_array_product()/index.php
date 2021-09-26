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
    $prices = array(1, 5, 7, 3, 3, 3, 22);

    echo "<pre>";
    print_r($prices);
    echo "</pre>";

    echo "Toplamı => " . array_sum($prices); // ? dizideki elemanların toplamını verir
    echo "<br />Çarpımı => " . array_product($prices); // ? dizideki elemanların çarpımını verir
    ?>
</body>

</html>