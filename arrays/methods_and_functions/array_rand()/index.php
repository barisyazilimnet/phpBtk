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

       $result = array_rand($names, 2); // ? diziden rastgele 2 tane eleman seçer ve bunların anahtar degerlerini yeni bir dizi oluşturarak depolar
       echo "<pre>";
       print_r($result);
       echo "</pre>";

       echo $names[$result[0]] . "<br />" . $names[$result[1]];
    ?>
</body>
</html>