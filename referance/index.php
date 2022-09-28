<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    $value_1 = "Barış";
    // ? deger referans ataması yapıldı
    // ? eger daha sonradan value_1 in degeri degişirse value_2 ninde degeri değişir
    $value_2 = &$value_1;
    echo $value_1, "<br />", $value_2, "<br />";
    $value_1 = "Semih";
    echo $value_1, "<br />", $value_2, "<br />";
    $value_1 = "İbo";
    echo $value_1, "<br />", $value_2;
    ?>
</body>

</html>