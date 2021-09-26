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
        $imgs = array("Resim1", "Resim2", "Resim14", "Resim3", "Resim576", "Resim200", "Resim150", "Resim101");
        $imgs1 = array("Resim1", "Resim2", "Resim14", "Resim3", "Resim576", "Resim200", "Resim150", "Resim101");

        echo "<pre>";
        print_r($imgs);
        echo "</pre>";

        echo "<pre>";
        print_r($imgs1);
        echo "</pre>";
        
        sort($imgs); // ! standart sıralama yapar her degeri karakter karakter ele alır.

        echo "<pre>";
        print_r($imgs);
        echo "</pre>";
        
        // natsort($imgs1); // ! dogal sıralama yapar her degeri bir kelime olarak ele alır.
        natcasesort($imgs1); // ? büyük harf küçük harf duyarlılıgı yoktur

        echo "<pre>";
        print_r($imgs1);
        echo "</pre>";
    ?>
</body>
</html>