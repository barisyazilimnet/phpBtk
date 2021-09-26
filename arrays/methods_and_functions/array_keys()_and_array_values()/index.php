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
        $names = array("Barış" => "PHP", "Semih" => "Python", "Furkan" => "PHP");

        echo "<pre>";
        print_r($names);
        echo "</pre>";

        echo "<pre>";
        print_r(array_keys($names)); // ? dizinin anahtar degerlerini alıp yeni bir dizi oluşturur
        echo "</pre>";

        echo "<pre>";
        print_r(array_keys($names, "PHP")); // ? dizideki eleman degeri "PHP" olan anahtar degerlerini alıp yeni bir dizi oluşturur
        echo "</pre>";

        echo "<pre>";
        print_r(array_values($names)); // ? dizinin eleman degerlerini alıp yeni bir dizi oluşturur
        echo "</pre>";

    ?>
</body>
</html>