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
        $array1 = array("Barış KURT", "Semih ACAR", "Erkan TAŞ", "Ali ÜSTÜN", "Ali TOPCU");
        $array2 = array("Gülşah KARATAŞ", "Beyhan OĞUZ", "Hilal YALÇIN", "Gamze DEMİRCİOĞLU");

        echo "<pre>";
        print_r($array1);
        echo "</pre>";

        echo "<pre>";
        print_r($array2);
        echo "</pre>";

        echo "<pre>";
        print_r(array_replace($array1, $array2)); 
        // ? anahtar degerleri eşleşenler degerleri ikinci dizideki degerlerle günceller
        // ! çok boyutlu dizilerde direk dizileri karşılaştırır
        echo "</pre>";


        $array3 = array("Barış KURT", array("Semih ACAR", "Erkan TAŞ"), "Ali ÜSTÜN", "Ali TOPCU");
        $array4 = array("Gülşah KARATAŞ", array("Beyhan OĞUZ"), "Gamze DEMİRCİOĞLU", "Hilal YALÇIN");
        
        echo "<pre>";
        print_r($array3);
        echo "</pre>";

        echo "<pre>";
        print_r($array4);
        echo "</pre>";

        echo "<pre>";
        print_r(array_replace_recursive($array3, $array4)); 
        // ? anahtar degerleri eşleşenler degerleri ikinci dizideki degerlerle günceller
        // ! çok boyutlu dizilerde dizilerin içindeki degerleri karşılaştırır
        echo "</pre>";
    ?>
</body>
</html>