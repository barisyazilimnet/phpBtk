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
    
        $array1 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", "Gülşah KARATAŞ", "Hilal YALÇIN", "Gamze DEMİRCİOĞLU", "Beyhan OĞUZ", "Sinem ŞİRİN", "Esra Vural");

        echo "<pre>";
        print_r($array1);
        echo "</pre>";
        
        echo "<pre>";
        print_r(array_chunk($array1, 2)); // ? her 2 elemanda yeni bir iç dizi oluşturur
        echo "</pre>";
        
        echo "<pre>";
        print_r(array_chunk($array1, 2, true)); // ? her 2 elemanda yeni bir iç dizi oluşturur ve anahtar degerlerini korur
        echo "</pre>";
    
    ?>
</body>

</html>