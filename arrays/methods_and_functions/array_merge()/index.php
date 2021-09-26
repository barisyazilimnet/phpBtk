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
    $array1 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN");
    $array2 = array("Gülşah KARATAŞ", "Hilal YALÇIN", "Gamze DEMİRCİOĞLU");
    $array3 = array("Barış KURT" => "Barış KURT", "Ali TOPÇU" => "Ali TOPÇU", "Ali ÜSTÜN" => "Ali ÜSTÜN");
    $array4 = array("Barış KURT" => "Gülşah KARATAŞ", "Ali TOPÇU" => "Hilal YALÇIN", "Ali ÜSTÜN" => "Gamze DEMİRCİOĞLU");
    $total_array = array_merge($array1, $array2); //? dizileri birleştirmek için kullanılır.
    $total_array2 = array_merge_recursive($array3, $array4); // ? dizileri birleştirir ama aynı anahtara sahip olan degerler yeniden bir iç dizi oluşturularak gösterilir yok edilmez


    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    echo "<pre>";
    print_r($array3);
    echo "</pre>";

    echo "<pre>";
    print_r($array4);
    echo "</pre>";

    echo "<pre>";
    print_r($total_array);
    echo "</pre>";

    echo "<pre>";
    print_r($total_array2);
    echo "</pre>";
    ?>
</body>

</html>