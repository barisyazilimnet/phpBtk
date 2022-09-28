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
        $names = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN");
        echo "<pre>";
        print_r($names);
        echo "</pre>";
        echo "Dizinin ilk elemanının degeri => " . current($names); //? dizinin gösterici konumdaki ilk elemanın degerini verir   
        $names = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN");
        echo "<pre>";
        print_r($names);
        echo "</pre>";
        echo "Dizinin ilk elemanının degeri => " . pos($names); //? dizinin gösterici konumdaki ilk elemanın degerini verir   
    ?>
</body>
</html>