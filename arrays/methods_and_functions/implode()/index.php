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
    $text = array("Barış", "KURT", "Gülşah", "KARATAŞ");
    echo "<pre>";
    print_r($text);
    echo "</pre>";
    echo implode($text) . "<br />"; //? diziyi birleştirirerek bir metin haline getirir
    echo implode(" ", $text) . "<br />"; //? diziyi birleştirirken her eleman arasına bir boşluk bırakır
    echo implode("<br />", $text) . "<br />";
    ?>
</body>

</html>