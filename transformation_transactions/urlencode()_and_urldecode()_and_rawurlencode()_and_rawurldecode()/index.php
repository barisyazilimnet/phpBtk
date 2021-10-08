<?php
//! urldeki özel karakterleri dönüştürme ve dönüştürülmüş url geri normal haline çevirmek için kullanılır
//! normal encode ile raw encode arasında boşluk dönüşüm farkı vardır
$url = "http://www.barisyazilim.net/homepage.php";
$url1 = "http://www.barisyazilim.net/home page.php";
$url2 = "http://www.barisyazilim.net/homepage.php?id=658&information=barisyazilim";
$url3 = "http://www.barisyazilim.net/homepage.php?id=658&information=baris yazilim";

echo $url . "<br />";
echo "<b>urlencode :</b>" . urlencode($url) . "<br />";
echo "<b>urldecode :</b>" . urldecode($url) . "<br />";
echo "<b>rawurlencode :</b>" . rawurlencode($url) . "<br />";
echo "<b>rawurldecode :</b>" . rawurldecode($url) . "<br /><br />";

echo $url1 . "<br />";
echo "<b>urlencode :</b>" . urlencode($url1) . "<br />";
echo "<b>urldecode :</b>" . urldecode($url1) . "<br />";
echo "<b>rawurlencode :</b>" . rawurlencode($url1) . "<br />";
echo "<b>rawurldecode :</b>" . rawurldecode($url1) . "<br /><br />";

echo $url2 . "<br />";
echo "<b>urlencode :</b>" . urlencode($url2) . "<br />";
echo "<b>urldecode :</b>" . urldecode($url2) . "<br />";
echo "<b>rawurlencode :</b>" . rawurlencode($url2) . "<br />";
echo "<b>rawurldecode :</b>" . rawurldecode($url2) . "<br /><br />";

echo $url3 . "<br />";
echo "<b>urlencode :</b>" . urlencode($url3) . "<br />";
echo "<b>urldecode :</b>" . urldecode($url3) . "<br />";
echo "<b>rawurlencode :</b>" . rawurlencode($url3) . "<br />";
echo "<b>rawurldecode :</b>" . rawurldecode($url3) . "<br /><br />";
