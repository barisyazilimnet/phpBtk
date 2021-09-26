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
    $names = array("bir" => "Barış", "iki" => "Semih", "uc" => "Erkan", "dort" => "Ali", "bes" => "İbrahim");
    $names1 = array(5 => "Barış", 10 => "Semih", 15 => "Erkan", 20 => "Ali", 25 => "İbrahim");
    
    echo "<pre>";
    print_r($names);
    echo "</pre>";

    
    echo "<pre>";
    print_r($names1);
    echo "</pre>";

    ksort($names); // ? dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde a dan z ye veya küçükten büyüge sıralar. eger bir degişkene atılır boolen deger döndürür
    ksort($names1); // ? dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde a dan z ye veya küçükten büyüge sıralar. eger bir degişkene atılır boolen deger döndürür
         
    echo "<pre>";
    print_r($names);
    echo "</pre>";
         
    echo "<pre>";
    print_r($names1);
    echo "</pre>";

    krsort($names); // ? dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde z den a ya veya büyükten küçüge sıralar. eger bir degişkene atılır boolen deger döndürür
    krsort($names1); // ? dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde z den a ya veya büyükten küçüge sıralar. eger bir degişkene atılır boolen deger döndürür
         
    echo "<pre>";
    print_r($names);
    echo "</pre>";
         
    echo "<pre>";
    print_r($names1);
    echo "</pre>";

    ?>
</body>

</html>