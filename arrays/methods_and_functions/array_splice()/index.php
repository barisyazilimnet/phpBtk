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
    $array1 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", "Gülşah KARATAŞ", "Hilal YALÇIN", "Gamze DEMİRCİOĞLU");
                // !     0              1           2           3                   4                5
                // !     -6             -5          -4          -3                  -2              -1

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    // array_splice($array1, 2); // ? dizinin ilk 2 indisini ekranda gösterir ve geriye kalan elemanları ana diziden komple siler
    // echo "<pre>";
    // print_r($array1); 
    // echo "</pre>";

    // $new_array = array_splice($array1, 2); // ? dizinin ilk 2 indisinden sonraki elemanları ekranda gösterir
    // echo "<pre>";
    // print_r($new_array); 
    // echo "</pre>";

    // array_splice($array1, 1, -2); // ? dizinin baştan 1 eleman ve sondan 2 eleman alır.
    // echo "<pre>";
    // print_r($array1);
    // echo "</pre>";

    // array_splice($array1, 2, count($array1), "Beyhan OĞUZ"); // ? dizinin ilk iki elemanını alır ve eleman sayısı kadar degeri atlayıp en sona yeni degeri ekler
    // echo "<pre>";
    // print_r($array1);
    // echo "</pre>";

    // array_splice($array1, 2, 2, "Beyhan OĞUZ"); // ? dizinin ilk iki elemanını alır ve 2 elemanı atlayıp yeni degeri ekler ve geriye eleman kalmışsa onları yazdırır
    // echo "<pre>";
    // print_r($array1);
    // echo "</pre>";

    // array_splice($array1, 2, 2, array("Beyhan OĞUZ", "Sinem ŞİRİN", "Esra Vural")); 
    // ? dizinin ilk iki elemanını alır ve 2 elemanı atlayıp yeni degerleri ekler ve geriye eleman kalmışsa onları yazdırır
    // ! ilk dizideki anahtar degerleri korunur ancak yeni eklenen dizinin anahtar degerleri korunamaz
    // echo "<pre>";
    // print_r($array1);
    // echo "</pre>";
    
    // array_splice($array1, 0, -3, array("Beyhan OĞUZ", "Sinem ŞİRİN", "Esra Vural")); // ? dizinin başından hiç eleman almaz ve yeni eklenecek olan elemanları ekler ve sondan 3 elemanı alır
    // echo "<pre>";
    // print_r($array1);
    // echo "</pre>";

    array_splice($array1, 3, 0, array("Beyhan OĞUZ", "Sinem ŞİRİN", "Esra Vural")); 
    // ? dizinin ilk 3 elemanını alır ve hiç eleman silmeden ilk 3 elemandan sonra  yeni eklenecek olan elemanları ekler ve dizinin kalanını ekrana yazdırır
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    ?>
</body>

</html>