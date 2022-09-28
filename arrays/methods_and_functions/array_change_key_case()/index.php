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
        $values = array("Anahtar1" => "Deger1", "Anahtar2" => "Deger2", "Anahtar3" => "Deger3");

        echo "<pre>";
        print_r($values);
        echo "</pre>";

        echo "<pre>";
        print_r(array_change_key_case($values)); // ? dizinin anahtar degerlerini ingilizce karakterlere göre küçük harfe dönüştürür
        echo "</pre>";

        echo "<pre>";
        print_r(array_change_key_case($values, CASE_UPPER)); // ? dizinin anahtar degerlerini ingilizce karakterlere göre büyük harfe dönüştürür
        echo "</pre>";
    ?>
</body>
</html>