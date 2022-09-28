<?php
//? belirtilen içerigin mantıksal veri türünde olup olmadıgını kontrol eder 
/*
? true degerleri
    -> true
    -> 1
    -> on
    -> yes
? false degerleri
    -> false
    -> 0
    -> off
    -> no
*/
echo "FILTER_VALIDATE_BOOLEAN <br />";
echo (filter_var("Barış KURT", FILTER_VALIDATE_BOOLEAN)) ? "Belirtilen içerik mantıksal veri türüdür" : "Belirtilen içerik mantıksal veri türünde degildir", "<br />";
echo (filter_var("on", FILTER_VALIDATE_BOOLEAN)) ? "Belirtilen içerik mantıksal veri türüdür" : "Belirtilen içerik mantıksal veri türünde degildir", "<br /><br />";

//? belirtilen içerigin int deger olup olmadıgını kontrol eder
echo "FILTER_VALIDATE_INT <br />";
echo (filter_var("Barış KURT", FILTER_VALIDATE_INT)) ? "Belirtilen içerik integer veri türüdür" : "Belirtilen içerik integer veri türünde degildir", "<br />";
echo (filter_var("10", FILTER_VALIDATE_INT)) ? "Belirtilen içerik integer veri türüdür" : "Belirtilen içerik integer veri türünde degildir", "<br />";
echo (filter_var(10.50, FILTER_VALIDATE_INT)) ? "Belirtilen içerik integer veri türüdür" : "Belirtilen içerik integer veri türünde degildir", "<br />";
echo (filter_var(10, FILTER_VALIDATE_INT)) ? "Belirtilen içerik integer veri türüdür" : "Belirtilen içerik integer veri türünde degildir", "<br /><br />";

//? belirtilen içerigin ip adresi olup olmadıgını bulur
echo "FILTER_VALIDATE_IP <br />";
echo (filter_var("127.0.0", FILTER_VALIDATE_IP)) ? "Belirtilen içerik ip adresidir" : "Belirtilen içerik ip adresi degildir", "<br />";
echo (filter_var("127.0.0.1", FILTER_VALIDATE_IP)) ? "Belirtilen içerik ip adresidir" : "Belirtilen içerik ip adresi degildir", "<br />";
echo (filter_var("2001:0db8:85a3:0000:0000:8a2e:0370:7334", FILTER_VALIDATE_IP)) ? "Belirtilen içerik ip adresidir" : "Belirtilen içerik ip adresi degildir", "<br />";
//! ipv4
echo "FILTER_FLAG_IPV4 <br />";
echo (filter_var("127.0.0.1", FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) ? "Belirtilen içerik ipv4 adresidir" : "Belirtilen içerik ipv4 adresi degildir", "<br />";
echo (filter_var("127.0.0.1", FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) ? "Belirtilen içerik ipv4 adresidir" : "Belirtilen içerik ipv4 adresi degildir", "<br />";
//! ipv6
echo "FILTER_FLAG_IPV6 <br />";
echo (filter_var("2001:0db8:85a3:0000:0000:8a2e:0370:7334", FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) ? "Belirtilen içerik ipv6 adresidir" : "Belirtilen içerik ipv6 adresi degildir", "<br />";
echo (filter_var("2001:0db8:85a3:0000:0000:8a2e:0370:7334", FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) ? "Belirtilen içerik ipv6 adresidir" : "Belirtilen içerik ipv6 adresi degildir", "<br /><br />";

//? belirtilen içerigin email adresi olup olmadıgını kontrol eder
echo "FILTER_VALIDATE_EMAIL <br />";
echo (filter_var("kurtbar07", FILTER_VALIDATE_EMAIL)) ? "Belirtilen içerik email adresidir" : "Belirtilen içerik email adresi degildir", "<br />";
echo (filter_var("barisyazilim.net", FILTER_VALIDATE_EMAIL)) ? "Belirtilen içerik email adresidir" : "Belirtilen içerik email adresi degildir", "<br />";
echo (filter_var("info@barisyazilim.net", FILTER_VALIDATE_EMAIL)) ? "Belirtilen içerik email adresidir" : "Belirtilen içerik email adresi degildir", "<br />";
echo (filter_var("kurt-bar07@hotmail.com", FILTER_VALIDATE_EMAIL)) ? "Belirtilen içerik email adresidir" : "Belirtilen içerik email adresi degildir", "<br /><br />";

//? belirtilen içerigin url adresi olup olmadıgını kontrol eder
echo "FILTER_VALIDATE_URL <br />";
echo (filter_var("barisyazilim", FILTER_VALIDATE_URL)) ? "Belirtilen içerik url adresidir" : "Belirtilen içerik url adresi degildir", "<br />";
echo (filter_var("barisyazilim.net", FILTER_VALIDATE_URL)) ? "Belirtilen içerik url adresidir" : "Belirtilen içerik url adresi degildir", "<br />";
echo (filter_var("www.barisyazilim.net", FILTER_VALIDATE_URL)) ? "Belirtilen içerik url adresidir" : "Belirtilen içerik url adresi degildir", "<br />";
echo (filter_var("http://www.barisyazilim.net", FILTER_VALIDATE_URL)) ? "Belirtilen içerik url adresidir" : "Belirtilen içerik url adresi degildir", "<br />"; //? http veya https farketmez
echo (filter_var("http://barisyazilim.net", FILTER_VALIDATE_URL)) ? "Belirtilen içerik url adresidir" : "Belirtilen içerik url adresi degildir", "<br />"; //? http veya https farketmez
//! https veya https ve domain adı
echo "FILTER_FLAG_HOSTNAME <br />";
echo (filter_var("www.barisyazilim.net", FILTER_VALIDATE_URL, FILTER_FLAG_HOSTNAME)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmamaktadır", "<br />";
echo (filter_var("http://barisyazilim.net", FILTER_VALIDATE_URL, FILTER_FLAG_HOSTNAME)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmamaktadır", "<br />"; //? http veya https farketmez
echo (filter_var("http://barisyazilim", FILTER_VALIDATE_URL, FILTER_FLAG_HOSTNAME)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmamaktadır", "<br />"; //? http veya https farketmez
echo (filter_var("http://www.barisyazilim.net", FILTER_VALIDATE_URL, FILTER_FLAG_HOSTNAME)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı bulunmamaktadır", "<br />"; //? http veya https farketmez
//! https veya https ve domain adı ve dosya yolu
echo "FILTER_FLAG_PATH_REQUIRED <br />";
echo (filter_var("http://barisyazilim.net", FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve dosya yolu bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve dosya yolu bulunmamaktadır", "<br />"; //? http veya https farketmez
echo (filter_var("http://barisyazilim/index.php", FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve dosya yolu bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve dosya yolu bulunmamaktadır", "<br />"; //? http veya https farketmez
echo (filter_var("http://barisyazilim.net/index.php", FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve dosya yolu bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve dosya yolu bulunmamaktadır", "<br />"; //? http veya https farketmez
//! https veya https ve domain adı ve query sorgusu
echo "FILTER_FLAG_QUERY_REQUIRED <br />";
echo (filter_var("http://barisyazilim.net", FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve query sorgusu bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve query sorgusu bulunmamaktadır", "<br />"; //? http veya https farketmez
echo (filter_var("http://barisyazilim?color=blue", FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve query sorgusu bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve query sorgusu bulunmamaktadır", "<br />"; //? http veya https farketmez
echo (filter_var("http://barisyazilim?color=blue&price=1500", FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) ? "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve query sorgusu bulunmaktadır" : "Belirtilen içerik url adresinin içinde https veya http ve domain adı ve query sorgusu bulunmamaktadır", "<br />"; //? http veya https farketmez
