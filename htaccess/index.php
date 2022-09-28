<!doctype html>
<html lang="tr-TR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Extra Eğitim</title>
</head>

<body>
	Standart Menüler :<br />
	<a href="index.php?page=home_page">Ana Sayfa</a> |
	<a href="index.php?page=products">Ürünler</a> |
	<a href="index.php?page=about_us">Hakkımızda</a> |
	<a href="index.php?page=contracts">Sözleşmeler</a> |
	<a href="index.php?page=contact">İletişim</a><br /><br />

	Manipüle Menüler :<br />
	<a href="home_page">Ana Sayfa</a> |
	<a href="products">Ürünler</a> |
	<a href="about_us">Hakkımızda</a> |
	<a href="contracts">Sözleşmeler</a> |
	<a href="contact">İletişim</a><br /><br />

	<?php
	if (isset($_GET["page"])) {
		$GelenSayfaDegeri	=	$_GET["page"];
	} else {
		$GelenSayfaDegeri	=	"";
	}

	if ($GelenSayfaDegeri == "home_page") {
		require_once("home_page.php");
	} elseif ($GelenSayfaDegeri == "products") {
		require_once("products.php");
	} elseif ($GelenSayfaDegeri == "about_us") {
		require_once("about_us.php");
	} elseif ($GelenSayfaDegeri == "contracts") {
		require_once("contracts.php");
	} elseif ($GelenSayfaDegeri == "contact") {
		require_once("contact.php");
	}
	?>
</body>

</html>