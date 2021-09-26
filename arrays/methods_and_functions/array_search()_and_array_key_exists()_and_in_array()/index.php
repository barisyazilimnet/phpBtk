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
       $values = array("A1" => "Barış KURT", "A2" => "Semih ACAR", "A3" => "Ali TOPCU", "A4" => "Erkan TAŞ"); 

       echo "<pre>";
       print_r($values);
       echo "</pre>";

       echo "Aranan elemanın anahtar degeri => " . array_search("Barış KURT", $values); // ? aranan elemanın anahtar degerini döndürür

       $values = array("A1" => "5", "A2" => 5, "A3" => "10", "A4" => 10); 

       echo "<pre>";
       print_r($values);
       echo "</pre>";

       echo "Aranan elemanın anahtar degeri => " . array_search(5, $values, true); // ? aranan elemanın anahtar degerini döndürür. veri türünü dogru saptayabilmesi için true yazılması gereklidir

       echo "<br /><br />Sonuç => " . array_key_exists("A3", $values); // ? aranan anahtar degeri dizide var ise true döndürür

       $values1 = array("Barış", "Semih", "Ali", "Erkan"); 

       echo "<pre>";
       print_r($values1);
       echo "</pre>";

       echo "<br /><br />Sonuç => " . in_array("Barış", $values1); // ? aranan eleman dizide var ise true döndürür
    ?>
</body>
</html>