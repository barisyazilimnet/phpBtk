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
        $names = array("Barış", "Semih", "Erkan", "Barış", "Barış", "Ali", "İbrahim", "Ali", "Semih");

        echo "<pre>";
        print_r($names);
        echo "</pre>";

        echo "<pre>";
        print_r(array_count_values($names)); // ? dizideki elemanların kaçar defa tekrarlandığını gösteren bir dizi oluşturur
        echo "</pre>";
    ?>
</body>
</html>