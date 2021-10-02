<?php
//! ortam degişkenleri bilgisayardan bilgisayara windows veya linux olmasına göre veya sunucuya göre farklılık gösterebilir
echo "<pre>";
print_r(getenv()); //? sistem tarafından tanımlanmış bütün ortam degişkenlerini verir 
echo "</pre>";
echo "İşletim sistemi :" . getenv("OS") . "<br />"; //? işletim sistemini verir
echo "Bilgisayar kullanıcı adı :" . getenv("USERNAME") . "<br />"; //? işletim sistemini verir

putenv("NANME=Barış");
putenv("SURNAME=KURT");
putenv("INFORMATION=Programmer");
putenv("COMPANY=bariysazilim.net");

echo "<pre>";
print_r(getenv()); //? sistem tarafından tanımlanmış bütün ortam degişkenlerini verir 
echo "</pre>";
