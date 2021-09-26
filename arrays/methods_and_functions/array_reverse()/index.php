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
       $names = array("Barış", "Semih", "Erkan", "Ali", "İbrahim", "Furkan", "Gülşah", "Beyhan"); 

       echo "<pre>";
       print_r($names);
       echo "</pre>";

    //    echo "<pre>";
    //    print_r(array_reverse($names)); // ? diziyi tersten sıralar
    //    echo "</pre>";

       echo "<pre>";
       print_r(array_reverse($names, true)); // ? otomatik olarak oluşturulan anahtar degerleri korunarak diziyi tersten sıralar
       echo "</pre>";
    ?>
</body>
</html>