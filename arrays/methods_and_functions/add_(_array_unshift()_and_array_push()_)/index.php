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
    $array1 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", array("Barış KURT" => "30.1.2000", "Ali TOPÇU" => "16.10.2000", "Ali ÜSTÜN" => "15.11.1999"));
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    array_unshift($array1, "Semih ACAR", "Erkan TAŞ"); //? dizinin başına yeni eleman ekler ve toplam eleman sayısını verir.
    array_unshift($array1[5], "1996", "1998");
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    array_unshift($array1, "İbrahim Bedir BÜYÜKDEMİR"); //? dizinin başına yeni eleman ekler ve toplam eleman sayısını verir.
    $number_elements = array_unshift($array1[6], "1998");
    echo "<pre>";
    print_r($array1);
    echo "</pre>Dizinin son eleman sayısı => " . $number_elements;
    $array2 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", array("Barış KURT" => "30.1.2000", "Ali TOPÇU" => "16.10.2000", "Ali ÜSTÜN" => "15.11.1999"));
    echo "<pre>";
    print_r($array2);
    echo "</pre>";
    array_push($array2, "Semih ACAR", "Erkan TAŞ"); //? dizinin sonuna yeni eleman ekler ve toplam eleman sayısını verir.
    array_push($array2, array("1996", "1998"));
    echo "<pre>";
    print_r($array2);
    echo "</pre>";
    array_push($array2, "İbrahim Bedir BÜYÜKDEMİR"); //? dizinin sonuna yeni eleman ekler ve toplam eleman sayısını verir.
    $number_elements = array_push($array2, array("1998"));
    echo "<pre>";
    print_r($array2);
    echo "</pre>Dizinin son eleman sayısı => " . $number_elements;
    ?>
</body>

</html>