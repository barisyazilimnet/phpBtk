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
            echo "<pre>";
            print_r($_FILES["file1"]); //? tüm dosya bilgilerini alır
            echo "</pre>";

            // [name] => 20191118_114030.jpg
            // [type] => image/jpeg
            // [tmp_name] => C:\xampp\tmp\php8DB0.tmp
            // [error] => 0
            // [size] => 7655006

            echo $_FILES["file1"]["name"] . "<br />"; //? dosyanın gerçek adı
            echo $_FILES["file1"]["type"] . "<br />"; //? dosyanın türü
            echo $_FILES["file1"]["tmp_name"] . "<br />"; //? dosyanın geçici ismi
            echo $_FILES["file1"]["error"] . "<br />"; //? dosyanın hata durumu
            echo $_FILES["file1"]["size"] . "<br />"; //? dosyanın byte cinsinden boyutu

            move_uploaded_file($_FILES["file1"]["tmp_name"], $_FILES["file1"]["name"]);
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file1">
        <input type="submit" value="Gönder">
    </form>
</body>
</html>