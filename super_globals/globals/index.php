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
    function deneme()
    {
        $GLOBALS["name"] = "Barış KURT"; // ?  heryerden erişebilir
    }
    deneme(); // ! ilk önce fonksiyon çagırılması lazım
    echo $name . "<br />";
    echo $GLOBALS["name"];
    ?>
</body>

</html>