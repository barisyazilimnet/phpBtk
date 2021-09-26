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
        $values = array("Anahtar1" => "Deger1", "Anahtar2" => "Deger2", "Anahtar3" => "Deger3");

        echo "<pre>";
        print_r($values);
        echo "</pre>";

        echo "<pre>";
        print_r(array_flip($values)); //? dizinin anahatarların ve degerlerin yer degiştirmesi saglanır
        echo "</pre>";
    ?>
</body>
</html>