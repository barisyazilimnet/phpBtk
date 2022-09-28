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
        /*
            SORT_ASC => a dan z ye / küçükten büyüge 
            SORT_DESC => z den a ya / büyükten küçüğe
            SORT_REGULAR => standart sıralama (varsayılan deger)
            SORT_NUMERIC => rakamsal sıralama
            SORT_STRING => alfabetik sıralama
            SORT_NATURAL => alfabetik sıralama (doğal sırlama)
        */
        // $names = array("bir" => "Barış", "iki" => 1, "uc" => "Erkan", "dort" => 10, "bes" => 9, "alti" => 25, "yedi" => "Beyhan", "sekiz" => 5);
        $imgs = array("Resim1", "Resim2", "Resim14", "Resim3", "Resim576", "Resim200", "Resim150", "Resim101");
        $imgs1 = array("Resim1", "Resim2", "Resim14", "Resim3", "Resim576", "Resim200", "Resim150", "Resim101");
        
        // echo "<pre>";
        // print_r($names);
        // echo "</pre>";

        echo "<pre>";
        print_r($imgs);
        echo "</pre>";

        echo "<pre>";
        print_r($imgs1);
        echo "</pre>";

        // array_multisort($names); //? otomatik oluşturulan anahtar degerleri korunmaz --- varsayılan a dan z ye sıralar 
        // array_multisort($names, SORT_REGULAR); //? otomatik oluşturulan anahtar degerleri korunmaz --- varsayılan a dan z ye sıralar 
        // array_multisort($names, SORT_ASC); //? otomatik oluşturulan anahtar degerleri korunmaz --- varsayılan a dan z ye sıralar 
        // array_multisort($names, SORT_DESC); //? otomatik oluşturulan anahtar degerleri korunmaz --- z den a ya sıralar 
        // array_multisort($names, SORT_NUMERIC); //? otomatik oluşturulan anahtar degerleri korunmaz --- rakamsal degerler sıralanır
        // array_multisort($names, SORT_STRING); //? otomatik oluşturulan anahtar degerleri korunmaz --- alfabetik degerleri sıralar
        // array_multisort($names, SORT_NATURAL); //? otomatik oluşturulan anahtar degerleri korunmaz --- alfabetik degerleri dogal olarak sıralar
        // array_multisort($imgs, SORT_NATURAL); //? otomatik oluşturulan anahtar degerleri korunmaz --- alfabetik degerleri dogal olarak sıralar
        array_multisort($imgs1, SORT_DESC, $imgs); //? otomatik oluşturulan anahtar degerleri korunmaz --- alfabetik degerleri dogal olarak sıralar
            
        echo "<pre>";
        print_r($imgs);
        echo "</pre>";
            
        echo "<pre>";
        print_r($imgs1);
        echo "</pre>";
            
        // echo "<pre>";
        // print_r($names);
        // echo "</pre>";
    ?>
</body>
</html>