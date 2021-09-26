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

    if($_GET){
        echo "<pre>";
        print_r($_GET["hobbies"]);
        echo "</pre>";
    }

    ?>
    <form action="" method="get">
    <input type="checkbox" name="hobbies[]" value="Yemek"> Yemek
    <input type="checkbox" name="hobbies[]" value="Bilgisyar"> Bilgisyar
    <input type="checkbox" name="hobbies[]" value="Oyun"> Oyun
    <input type="checkbox" name="hobbies[]" value="Oyun"> Oyun
    <input type="checkbox" name="hobbies[]" value="Kitap"> Kitap
    <input type="submit" value="Gönder">
    </form>
</body>

</html>