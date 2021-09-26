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
        $array = array("Alanya" => "Barış KURT", "Kırşehir" => "Ali TOPÇU", "Isparta" => "Ali ÜSTÜN");
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        $first_value_key = key($array); //? dizinin gösterici konumdaki ilk elemanın anahtar degerini verir
        echo "İlk elemanın anahtar degeri => ".$first_value_key;
        $array2 = array("Barış KURT", "my_darlings" => array("Gülşah KARATAŞ", "Beyhan OGUZ", "birth_dates" => array("Gülşah KARATAŞ" => "1.4.2000", "Beyhan OGUZ" => "13.3.1996")), "Büşra ŞAHİN");
        echo "<pre>";
        print_r($array2);
        echo "</pre>";
        $first_value_key = key($array2); //? dizinin gösterici konumdaki ilk elemanın anahtar degerini verir
        echo "İlk elemanın anahtar degeri => ".$first_value_key;
        $array2 = array("my_darlings" => array("Gülşah KARATAŞ", "Beyhan OGUZ", "birth_dates" => array("Gülşah KARATAŞ" => "1.4.2000", "Beyhan OGUZ" => "13.3.1996")), "Büşra ŞAHİN");
        echo "<pre>";
        print_r($array2);
        echo "</pre>";
        $first_value_key = key($array2); //? dizinin gösterici konumdaki ilk elemanın anahtar degerini verir
        echo "İlk elemanın anahtar degeri => ".$first_value_key;
        $array3 = array("Barış KURT", "my_darlings" => array("Gülşah KARATAŞ", "Beyhan OGUZ", "birth_dates" => array("Gülşah KARATAŞ" => "1.4.2000", "Beyhan OGUZ" => "13.3.1996")), "Büşra ŞAHİN");
        echo "<pre>";
        print_r($array3);
        echo "</pre>";
        $first_value_key = key($array3["my_darlings"]); //? dizinin gösterici konumdaki ilk elemanın anahtar degerini verir
        echo "İlk elemanın anahtar degeri => ".$first_value_key;
        $array4 = array("Barış KURT", "my_darlings" => array("Gülşah KARATAŞ", "Beyhan OGUZ", "birth_dates" => array("Gülşah KARATAŞ" => "1.4.2000", "Beyhan OGUZ" => "13.3.1996")), "Büşra ŞAHİN");
        echo "<pre>";
        print_r($array4);
        echo "</pre>";
        $first_value_key = key($array4["my_darlings"]["birth_dates"]); //? dizinin gösterici konumdaki ilk elemanın anahtar degerini verir
        echo "İlk elemanın anahtar degeri => ".$first_value_key;
    ?>
</body>
</html>