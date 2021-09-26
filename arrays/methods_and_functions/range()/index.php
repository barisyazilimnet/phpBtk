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
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    echo "<pre>";
    print_r(range(1, 10)); //? 1 ve 10 dahil olmak üzere 1 den 10 a kadar sayı dizisi oluşturur
    echo "</pre>";

    echo "<pre>";
    print_r(range(0, 500, 10)); //? 0 ve 500 dahil olmak üzere 0 den 500 a kadar 10 ar 10 ar atlayarak sayı dizisi oluşturur
    echo "</pre>";

    echo "<pre>";
    print_r(range("a", "z", 5)); 
    //? a ve z dahil olmak üzere a dan z ye kadar 5 er 5 er atlayarak alfabetik dizi oluşturur
    // ! ingilizce karakterler kullanır
    echo "</pre>";

    ?>
</body>

</html>