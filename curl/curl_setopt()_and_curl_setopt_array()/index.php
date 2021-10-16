<?php
$ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "https://www.turkcell.com.tr/"); //? baglantı adresi sonradan ayar şeklinde tanımlanabilir
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //? deger direk olarak dönmeyip curl_exec e tanımlanan degişkene depolanır
// curl_setopt($ch, CURLOPT_TIMEOUT, 10); //? curl oturumu (veri çekme süresi) en fazla 10 sn çalışır
// curl_setopt($ch, CURLOPT_TIMEOUT_MS, 10000); //? curl oturumu (veri çekme süresi) en fazla 10 sn çalışır -- milisaniye üzerinden
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); //? eger yönlendirme varsa onu takip eder
// curl_setopt($ch, CURLOPT_NOBODY, true); //? gidilen sitenen body kısmını almadan sadece headerları alır
// curl_setopt($ch, CURLOPT_HEADER, true); //? gidilen sitenen header kısmını alır
// curl_setopt($ch, CURLOPT_HTTPHEADER, "123456489asdasd"); //? üst bilgi gönderilebilir
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0"); //? hangi tarayıcıdan girdigimi belirterek gidilen site kandırılabilir
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36"); //? hangi tarayıcıdan girdigimi belirterek gidilen site kandırılabilir -- mobil
// curl_setopt($ch, CURLOPT_REFERER, "http://www.barisyazilim.net"); //? hangi siteden gidildigi hakkında bilgi gönderilebilir
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); //? SSL sertifikası tanımlamak için
/*
0 -> ortak bir özellik aranmaz
1 -> ssl sertifikasında ortak isim özelligine bakılır
2 -> ssl sertifikasında ortak isim özelligi ve server ın ana bilgisayar adının eşleşmesine bakılır 
*/
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); //? SSL sertifikası dogrulamak veya dogrulamayı iptal etmek için
// curl_setopt($ch, CURLOPT_SSLVERSION, 0); //? SSL sertifikasının sürümü belirtmek için
/*
0 -> default => tüm sürümler
1 -> TLSv1
2 -> SSLv2
3 -> SSLv3
4 -> TLSv1_0
5 -> TLSv1_1
6 -> TLSv1_2
*/
// curl_setopt($ch, CURLOPT_POST, true); //? url e HTTP POST işlemi tanımlar
// curl_setopt($ch, CURLOPT_POSTFIELDS, ["name_surname" => "Barış KURT", "email" => "kurt-bar07@hotmail.com", "phone_number" => 5324973873]); //? url e HTTP POST işleminde gönderilecek olan verileri tanımlamak için kullanılır
// curl_setopt($ch, CURLOPT_FILE, fopen("new.txt", "w")); //? dosya indirmek için kullanılır --  baglandıgı sitenin tüm kaynak kodlarını alır
// curl_setopt($ch, CURLOPT_COOKIE, "user=barisyazilim.net; email=kurt-bar07@hotmail.com"); //? cookie oluşturmak için kullanılır
// curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . "/cookie.txt"); //? daha önce oluşturulmuş cookieleri kaydetmek için kullanılır
// curl_setopt($ch, CURLOPT_COOKIEFILE, "__DIR__ . "/cookie.txt"); //? dosyaya kaydedilen cookileri tekrar göndermek için kullanılır
curl_setopt_array(
    $ch,
    [
        // CURLOPT_URL => "https://www.mynet.com/",
        CURLOPT_URL => "http://localhost/php/curl/curl_setopt()_and_curl_setopt_array()/example.php",
        // CURLOPT_URL => "https://www.turkcell.com.tr/",
        CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_TIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true,
        // CURLOPT_NOBODY => true,
        // CURLOPT_HEADER => true,
        // CURLOPT_HTTPHEADER => ["Security_code : 123456489asdasd"],
        // CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0",
        // CURLOPT_USERAGENT => "Mozilla/5.0 (Linux; Android 6.0.1; SM-G935S Build/MMB29K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36",
        CURLOPT_REFERER => "http://www.barisyazilim.net",
        // CURLOPT_SSL_VERIFYHOST => 1,
        // CURLOPT_SSL_VERIFYPEER => 1,
        // CURLOPT_SSLVERSION => 0,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => ["name_surname" => "Barış KURT", "email" => "kurt-bar07@hotmail.com", "phone_number" => 5324973873],
        // CURLOPT_POSTFIELDS => ["file" => new CURLFile(__DIR__ . "/files/cnc-laser-cutting-metal-close-up-modern-industrial-technology-small-depth-field.jpg", "image/jpg")], //? farklı dosya türüde belirtilebilir
        CURLOPT_FILE => fopen("new.html", "w"),
        CURLOPT_COOKIE => "user=barisyazilim.net; email=kurt-bar07@hotmail.com",
        CURLOPT_COOKIEJAR => __DIR__ . "/cookie.txt",
        CURLOPT_COOKIEFILE => __DIR__ . "/cookie.txt"
    ]
); //? tek tek tanımlanan özellikler tek seferde de tanımlanabilir
$result = curl_exec($ch);
curl_close($ch);
echo $result;
