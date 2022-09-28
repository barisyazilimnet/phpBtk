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
        $name = "Barış";
        $surname = "KURT";
        $birth_date = 2000;

        $information = array("name", "surname", "birth_date");

        echo "<pre>";
        print_r($information);
        echo "</pre>";

        echo "<pre>";
        print_r(compact($information)); // ? dizideki degerler anahtar olarak kabul edilir ve önceden oluşturulmuş olan ona karşılık gelen degişkenlerin degerleri diziye eleman olarak eklenir.
        echo "</pre>";

        $information1 = array("name", "surname");

        echo "<pre>";
        print_r($information1);
        echo "</pre>";

        echo "<pre>";
        print_r(compact($information1, "birth_date")); // ? dizideki degerler ve fonksiyonun içindeki degerler anahtar olarak kabul edilir ve önceden oluşturulmuş olan ona karşılık gelen degişkenlerin degerleri diziye eleman olarak eklenir.
        echo "</pre>";

        echo "<pre>";
        print_r(compact("name", "surname", "birth_date")); // ? fonksiyonun içindeki degerler anahtar olarak kabul edilir ve önceden oluşturulmuş olan ona karşılık gelen degişkenlerin degerleri diziye eleman olarak eklenir.
        echo "</pre>";

    ?>
</body>
</html>