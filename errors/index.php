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
       error_reporting(E_ALL); // ? tüm seviye hataları => -1 
       error_reporting(E_ERROR); // ? önemli çalışma zamanı hataları
       error_reporting(E_WARNING); // ? Önemli olmayan çalışma zamanı uyarıları
       error_reporting(E_PARSE); // ? Derleme zamanı ayrıştırma hataları
       error_reporting(E_NOTICE); // ? Çalışma zamanı bildirimleri
       error_reporting(0); // ? hiç bir hatayı göstermez
       error_reporting(E_ALL ^ E_ERROR); // ? Error hataları hariç bütün hataları gösterir

    ?>
</body>

</html>