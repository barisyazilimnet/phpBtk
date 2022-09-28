<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    //echo $_SERVER["PHP_SELF"]; //? yazıldıgı dosyanın konumunu verir
    //echo $_SERVER["GATEWAY_INTERFACE"]; //? serverın cgı (ortak ag geçidi) sürüm bilgisini degerini verir -> genellikle 1.1 verir -> her sunucuda sonuç vermez
    //echo $_SERVER["SERVER_ADDR"]; //? serverın ip adresini verir -> localde ::1 bilgisini verir çünkü localde ip adresi yoktur
    //echo $_SERVER["SERVER_NAME"]; //? çalıştıgı serverın isim bilgisini verir -> apache server içinde "ServerName" olarak tanımlıdır
    //echo $_SERVER["SERVER_SOFTWARE"]; //? serverın  yazılım bilgilerini verir
    //echo $_SERVER["SERVER_PROTOCOL"]; //? istek yapılan protokolun isim ve sürüm bilgisini verir
    //echo $_SERVER["REQUEST_METHOD"]; //? erişim için kullanılan istek yönetimi bilgisini verir
    //echo $_SERVER["REQUEST_TIME"]; //? zaman damgası bilgisini verir
    //echo $_SERVER["REQUEST_TIME_FLOAT"]; //? zaman damgasını micro saniye bilgisi ile birlikte verir
    //echo $_SERVER["QUERY_STRING"]; //? linkte dosya isminden sonra belirtilen degerleri verir
    //echo $_SERVER["DOCUMENT_ROOT"]; //? kök dizini bilgisini verir
    //echo $_SERVER["HTTP_ACCEPT"]; //? erişim için kabul edilen başlık bilgilerini verir
    //echo $_SERVER["HTTP_ACCEPT_ENCODING"]; //? erişim için kabul edilen kodlama başlık içerigi bilgisini verir
    //echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; //? erişim için kabul edilen lisan başlık içerigi bilgisini verir
    //echo $_SERVER["HTTP_CONNECTION"]; //? erişim için kabul edilen baglantı başlık içerigi bilgisini verir
    //echo $_SERVER["HTTP_HOST"]; //? çalıştıgı host (domain) başlıgı bilgisini verir
    //echo $_SERVER["HTTP_REFERER"]; //? siteye girdigi bir önceki site bilgisini verir -> mesela googleden hepsiburadaya giren kişi googleden referans alarak hepsiburadaya girmiştir
    //echo $_SERVER["HTTP_USER_AGENT"]; //? kullanıcının browser bilgisini verir -> bazı browserlarda sondan 2. bazı browserlarda sonda degerdir
    //echo $_SERVER["HTTPS"]; //? eger https protokolü ile baglanılıyorsa on (aktif) bilgisini verir, https protokolu yoksa boş deger döner -> eger boşsa hata verebilir
    //echo $_SERVER["REMOTE_ADDR"]; //? kullanıcının ip adresini verir -> localde ::1 degerini verir
    //echo $_SERVER["REMOTE_HOST"]; //? kullanıcının bilgisayar adı bilgisini verir -> degerin alınabilmesi için apache server içinde  "HostnameLookups On" degeri tanımlı olmalıdır.
    //echo $_SERVER["REMOTE_PORT"]; //? kullanıcının sunucuya baglandıgı port numarası -> ara ara degişebilir
    //echo $_SERVER["SCRIPT_FILENAME"]; //? dosyanın bulundugu konumu verir ama kök dizini bilgisi ile verilir
    //echo $_SERVER["SERVER_ADMIN"]; //? serverın yönetici email bilgisini verir -> apache server içinde "ServerAdmin" olarak tanımlıdır
    //echo $_SERVER["SERVER_PORT"]; //? serverın port bilgisini verir -> apache server içinde "Listen" olarak tanımlıdır0
    //echo $_SERVER["SERVER_SIGNATURE"]; //? SERVER_SOFTWARE + HTTP_HOST + SERVER_PORT bilgileri birbirine eklenmiş şeklindeki bilgi verir
    //echo $_SERVER["SCRIPT_NAME"]; //? dosyanın bulundugu konum bilgisini verir
    //echo $_SERVER["REQUEST_URI"]; //? dosyanın bulundugu konum bilgisini verir -> domain ve dosya ismini göstermez -> localde dosya isminide gösterebilir
    echo "<pre>";
    print_r($_SERVER); // ? bütün $_SERVER degerlerini verir -> serverdan servera deger sayısı ve degerler degişebilir
    echo "</pre>";
    ?>
</body>

</html>