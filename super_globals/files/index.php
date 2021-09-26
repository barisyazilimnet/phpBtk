<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        print_r($_FILES["_file"]); // ? dosya ile ilgili bütün bilgileri verir
        echo($_FILES["_file"]["name"])."<br />"; // ? dosya adı bilgisini verir
        echo($_FILES["_file"]["type"])."<br />"; // ? dosya tipi bilgisini verir
        echo($_FILES["_file"]["tmp_name"])."<br />"; // ? dosya geçici dizin bilgisini verir
        echo($_FILES["_file"]["error"])."<br />"; // ? dosya yüklenirken oluşan hata bilgisini verir eger hata yoksa 0 degeri döner
        echo($_FILES["_file"]["size"])."<br />"; // ? dosya boyut bilgisini verir -> bayt cinsinden
        ?>
    </pre>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="_file">
        <input type="submit" value="Gönder">
    </form>
</body>

</html>