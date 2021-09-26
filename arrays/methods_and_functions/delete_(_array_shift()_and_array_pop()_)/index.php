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
    // ! eger dizide harf olarak kullanılan anahtarlar oldugu gibi kaydırılır eger hepsi rakamsal olarak yazıldıysa yeniden yeniden numaralandırılarak gösterilir
    $array3 = array("Ben" => "Barış KURT", "Gülşah KARATAŞ", "Beyhan OGUZ", "Büşra ŞAHİN");
    echo "<pre>";
    print_r($array3);
    echo "</pre>";
    array_shift($array3); // ? eleman siler ve silinen elemanın degerini verir
    echo "<pre>";
    print_r($array3);
    echo "</pre>";
    $array4 = array("Barış KURT", "İlk Sevgilim" => "Gülşah KARATAŞ", "Beyhan OGUZ", "Büşra ŞAHİN");
    echo "<pre>";
    print_r($array4);
    echo "</pre>";
    array_shift($array4); // ? eleman siler ve silinen elemanın degerini verir
    echo "<pre>";
    print_r($array4);
    echo "</pre>";
    $array5 = array(658 => "Barış KURT", 19 => "Gülşah KARATAŞ", "5 yaş fark" => "Beyhan OGUZ", 20 => "Büşra ŞAHİN");
    echo "<pre>";
    print_r($array5);
    echo "</pre>";
    array_shift($array5); // ? eleman siler ve silinen elemanın degerini verir
    echo "<pre>";
    print_r($array5);
    echo "</pre>";
    $array6 = array(658 => "Barış KURT", 19 => "Gülşah KARATAŞ", 24 => "Beyhan OGUZ", 20 => "Büşra ŞAHİN");
    echo "<pre>";
    print_r($array6);
    echo "</pre>";
    $deleted_elements = array_shift($array6); // ? eleman siler ve silinen elemanın degerini verir
    echo "Silinen eleman => ".$deleted_elements;
    echo "<pre>";
    print_r($array6);
    echo "</pre>";
    $array7 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", array("Barış KURT" => "30.1.2000", "Ali TOPÇU" => "16.10.2000", "Ali ÜSTÜN" => "15.11.1999"));
    echo "<pre>";
    print_r($array7);
    echo "</pre>";
    array_shift($array7[3]); // ? eleman siler ve silinen elemanın degerini verir
    echo "<pre>";
    print_r($array7);
    echo "</pre>";
    //! silinen eleman sonda oldugu için anahtarlar yeniden oluşuturulmaz
    $array8 = array(658 => "Barış KURT", 19 => "Gülşah KARATAŞ", 24 => "Beyhan OGUZ", 20 => "Büşra ŞAHİN");
    echo "<pre>";
    print_r($array8);
    echo "</pre>";
    $deleted_elements = array_pop($array8); // ? eleman siler ve silinen elemanın degerini verir
    echo "Silinen eleman => ".$deleted_elements;
    echo "<pre>";
    print_r($array8);
    echo "</pre>";
    $array9 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", array("Barış KURT" => "30.1.2000", "Ali TOPÇU" => "16.10.2000", "Ali ÜSTÜN" => "15.11.1999"));
    echo "<pre>";
    print_r($array9);
    echo "</pre>";
    array_pop($array9[3]); // ? eleman siler ve silinen elemanın degerini verir
    echo "<pre>";
    print_r($array9);
    echo "</pre>";
    $array10 = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN", array("Barış KURT" => "30.1.2000", "Ali TOPÇU" => "16.10.2000", "Ali ÜSTÜN" => "15.11.1999"));
    echo "<pre>";
    print_r($array10);
    echo "</pre>";
    array_pop($array10[3]); // ? eleman siler ve silinen elemanın degerini verir
    echo "<pre>";
    print_r($array10);
    echo "</pre>";
    ?>
</body>

</html>