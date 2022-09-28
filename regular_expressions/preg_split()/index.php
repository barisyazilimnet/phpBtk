<?php
echo "İçerik<br />Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz<pre>";
print_r(preg_split("/ /", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz"));
//? içerigi boşluklardan bölümleyerek içerigi parçalar ve diziye aktarır
echo "</pre>";

echo "İçerik<br />Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz<pre>";
print_r(preg_split("//", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz"));
//? içerigi her karakterden bölümleyerek içerigi parçalar ve diziye aktarır
echo "</pre>";

echo "İçerik<br />Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz<pre>";
print_r(preg_split("//u", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz"));
//? içerigi her karakterden bölümleyerek içerigi parçalar ve diziye aktarır
//? en sona u eklenerek türkçe karakterleride algılaması saglandı
echo "</pre>";