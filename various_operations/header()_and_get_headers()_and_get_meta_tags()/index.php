<?php
//! genellikle sayfanın en üstünde kullanılması önerilir
// header("Expires: Mon, 01 Jan, 2021 00:00:00 GMT"); //? taryıcı sayfayı güncelleme tarihi olarak bu tarihi kabul eder
// header("Cache-control: no-cache"); //? taryıcı sayfayı önbellege kaydetmez sayfayı her açmada veya yenileme güncel olan anlık veriyi gösterir
// header("Pragma: no-cache"); //? taryıcı sayfayı önbellege kaydetmez sayfayı her açmada veya yenileme güncel olan anlık veriyi gösterir
//! bu ikisi beraber baglantılı çalışır

//? sayfa açıldıgı anda pdf dosya indirme bölümü çıkar
// header("Content-type: application/pdf");
// header("Content-Disposition: attachment; filename=indirilen_dosya.pdf");
// readfile("eminevim.pdf");

// header("Location: http://barisyazilim.net");
// exit(); //? bazen sayfalar yönlenmeyebilir o yüzden ikisi birlikte kullanılması önerilir
// header("Refresh: 10; url=http://barisyazilim.net");

// header("HTTP/1.0 404 Not Found"); //? sayfa bulunamıyor yazısı gelir

// header("Content-Type: text/html; charset=UTF-8"); //? genel karakter seti -- genellikle bu kullanılması önerilir her türlü dili algılar
// header("Content-Type: text/html; charset=ISO-8859-8"); //? türkçe karakter seti
// header("Content-Type: text/html; charset=windows-1254"); //? windows türkçe karakter seti

// echo "<pre>";
// print_r(get_headers("http://www.google.com.tr")); //? google sunucusuna istek gönderir sunucunun verdigi yanıtları verir
// echo "</pre>";

// echo "<pre>";
// print_r(get_headers("http://www.google.com.tr", 1)); //? google sunucusuna istek gönderir sunucunun verdigi yanıtları verir
// echo "</pre>";

echo "<pre>";
print_r(get_meta_tags("https://www.mynet.com")); //? sayfanın meta taglarını ve degerlerini alır
echo "</pre>";

