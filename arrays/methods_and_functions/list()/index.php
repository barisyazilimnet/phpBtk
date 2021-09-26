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
    $darlings = array("Gülşah KARATAŞ", "Sinem ŞİRİN", "Beyhan OĞUZ", array("8 ay", "Çocuktum", "Çok sevdim"));
    echo "<pre>";
    print_r($darlings);
    echo "</pre>";
    
    //! tek boyutlu örnek için
    // list($first_darling, $second_darling) = $darlings; //? dizideki elemanları degişkenlere atamak için kullanılır
    // echo $first_darling . "<br />" . $second_darling . "<br />";

    // list(, , $third_darling) = $darlings; //? kullanmak istemediginiz elemanları virgül bırakarak boş geçebilirsiniz
    // echo $third_darling;

    list($first_darling, $second_darling, $third_darling, list($first, $second, $third)) = $darlings;
    echo $first_darling . " = " . $first . "<br />",
         $second_darling . " = " . $second . "<br />",
         $third_darling . " = " . $third . "<br />";
    ?>
</body>

</html>