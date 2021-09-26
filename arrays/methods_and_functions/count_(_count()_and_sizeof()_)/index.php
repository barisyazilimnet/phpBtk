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
    $names = array("Barış KURT", "my_darlings" => array("Gülşah KARATAŞ", "Beyhan OGUZ", "birth_dates" => array("Gülşah KARATAŞ" => "1.4.2000", "Beyhan OGUZ" => "13.3.1996")), "Büşra ŞAHİN");
    echo "<pre>";
    print_r($names);
    echo "</pre><br />
          Dizideki eleman sayısını verir. ( <font color='red'>count</font> ) => " . count($names),
    "<br />Dizideki eleman sayısını verir. ( <font color='red'>sizeof</font> ) => " . sizeof($names),
    "<br />Dizideki eleman sayısını verir. Ama çok boyutlu dizilerde iç elemanlarıda sayar. ( <font color='red'>COUNT_RECURSIVE</font> ) => " . count($names, COUNT_RECURSIVE);
    ?>
</body>

</html>