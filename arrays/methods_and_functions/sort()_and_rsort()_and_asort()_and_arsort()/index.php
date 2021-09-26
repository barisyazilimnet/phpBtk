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
    $numbers = array(1,6,473,81,5,1886,135,51632,1232);

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    // sort($names); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak a dan z ye yada küçükten büyüge sıralar 
    // sort($numbers); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak a dan z ye yada küçükten büyüge sıralar 
    
    // rsort($names); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak z den a ya yada büyükten küçüge sıralar 
    // rsort($numbers); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak z den a ya yada büyükten küçüge sıralar 

    // asort($names); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak a dan z ye yada küçükten büyüge anahtar degerleri korunarak sıralar 
    // asort($numbers); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak a dan z ye yada küçükten büyüge anahtar degerleri korunarak sıralar 

    arsort($names); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak z den a ya yada büyükten küçüge anahtar degerleri korunarak sıralar 
    arsort($numbers); // ? dizinin elemanlarını büyük harf küçük harf duyarlı olarak z den a ya yada büyükten küçüge anahtar degerleri korunarak sıralar 

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    ?>
</body>

</html>