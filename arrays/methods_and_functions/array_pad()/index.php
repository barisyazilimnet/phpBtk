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
       $names = array("Barış KURT", "Semih ACAR", "Erkan TAŞ"); 

       echo "<pre>";
       print_r($names);
       echo "</pre>";

       echo "<pre>";
       print_r(array_pad($names, 10, "Beyhan OĞUZ")); //? dizinin elemanını 10 taneye tamamlayacak şekilde devamına "Beyhan OĞUZ" değerini ekler
       echo "</pre>";

       echo "<pre>";
       print_r(array_pad($names, -10, "Beyhan OĞUZ")); //? dizinin elemanını 10 taneye tamamlayacak şekilde dizi elemanlarının öncesine "Beyhan OĞUZ" değerini ekler
       echo "</pre>";

    ?>
</body>
</html>