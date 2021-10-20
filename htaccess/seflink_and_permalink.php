<?php
	function SEO($value){
		$value			=	trim($value);
		$turkish_character	=	array("ç", "Ç", "ğ", "Ğ", "ı", "İ", "ö", "Ö", "ş", "Ş", "ü", "Ü");
		$english_character		=	array("c", "c", "g", "g", "i", "i", "o", "o", "s", "s", "u", "u");
		$value			=	str_replace($turkish_character, $english_character, $value);
		$value			=	mb_strtolower($value, "UTF-8");
		$value			=	preg_replace("/[^a-z0-9]/", "-", $value);
		$value			=	preg_replace("/-+/", "-", $value);
		$value			=	trim($value, "-");
		return $value;
	}
	
	$product	=	"Sony KD-55XE7005 139 cm 4K Ultra HD Dahili Uydu Alıcılı Smart LED TV 388858701";
	
	echo "Orjinal Metin : <br />";
	echo $product . "<br /><br />";
	
	echo "SEF Link / Permalink Yapısı : <br />";
	echo SEO($product);
	
	?>