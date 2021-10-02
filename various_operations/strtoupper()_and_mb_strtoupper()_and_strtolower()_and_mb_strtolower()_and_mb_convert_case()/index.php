<?php
echo strtoupper("barış kurt - barisyazilim.net") . "<br />"; //? içerigi türkçe karakterler hariç olmak üzere hepsini büyük harfe çevirir
echo mb_strtoupper("barış kurt - barisyazilim.net") . "<br />"; //? içerigi hepsini büyük harfe çevirir
echo mb_strtoupper("barış kurt - barisyazilim.net", "utf-8") . "<br /><br />"; //? içerigi hepsini büyük harfe çevirir

echo strtolower("BARIŞ KURT - BARİSYAZİLİM.NET") . "<br />"; //? içerigi türkçe karakterler hariç olmak üzere hepsini küçük harfe çevirir
echo mb_strtolower("BARIŞ KURT - BARİSYAZİLİM.NET") . "<br />"; //? içerigi hepsini küçük harfe çevirir
echo mb_strtolower("BARIŞ KURT - BARİSYAZİLİM.NET", "utf-8") . "<br /><br />"; //? içerigi hepsini küçük harfe çevirir

echo mb_convert_case("barış kurt - barisyazilim.net", MB_CASE_UPPER, "utf-8") . "<br />"; //? içerigi hepsini büyük harfe çevirir
echo mb_convert_case("BARIŞ KURT - BARİSYAZİLİM.NET", MB_CASE_LOWER, "utf-8") . "<br />"; //? içerigi hepsini küçük harfe çevirir
echo mb_convert_case("barış kurt - barisyazilim.net", MB_CASE_TITLE, "utf-8") . "<br /><br />"; //? içerikteki kelimelerin baş harflerini büyük harfe çevirir

//? cümlenin sadece ilk karakterini büyütür digerlerini küçültür
function first_character_case_converter($word)
{
    $len = strlen($word);
    $first_character = mb_substr($word, 0, 1, "utf-8");
    $other_chracater = mb_substr($word, 1, $len, "utf-8");
    $low = array('a', 'b', 'c', 'ç', 'd', 'e', 'f', 'g', 'ğ', 'h', 'ı', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'ö', 'p', 'r', 's', 'ş', 't', 'u', 'ü', 'v', 'y', 'z', 'q', 'w', 'x');
    $upp = array('A', 'B', 'C', 'Ç', 'D', 'E', 'F', 'G', 'Ğ', 'H', 'I', 'İ', 'J', 'K', 'L', 'M', 'N', 'O', 'Ö', 'P', 'R', 'S', 'Ş', 'T', 'U', 'Ü', 'V', 'Y', 'Z', 'Q', 'W', 'X');
    $first_character_convert = str_replace($low, $upp, $first_character);
    $other_character_convert = str_replace($upp, $low, $other_chracater);
    return $first_character_convert . $other_character_convert;
}

//? kelimelerin ilk karakterlerini büyütür digerlerini küçültür
function word_first_character_case_converter($word)
{
    $return_words = "";
    $number = 1;
    $result = "";
    $words = explode(" ", $word);
    $word_number = count($words);
    $low = array('a', 'b', 'c', 'ç', 'd', 'e', 'f', 'g', 'ğ', 'h', 'ı', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'ö', 'p', 'r', 's', 'ş', 't', 'u', 'ü', 'v', 'y', 'z', 'q', 'w', 'x');
    $upp = array('A', 'B', 'C', 'Ç', 'D', 'E', 'F', 'G', 'Ğ', 'H', 'I', 'İ', 'J', 'K', 'L', 'M', 'N', 'O', 'Ö', 'P', 'R', 'S', 'Ş', 'T', 'U', 'Ü', 'V', 'Y', 'Z', 'Q', 'W', 'X');
    foreach($words as $w){
        $w = trim($w);
        $len = strlen($w);
        $first_character = mb_substr($w, 0, 1, "utf-8");
        $other_chracater = mb_substr($w, 1, $len, "utf-8");
        $first_character_convert = str_replace($low, $upp, $first_character);
        $other_character_convert = str_replace($upp, $low, $other_chracater);
        $return_words .= $first_character_convert . $other_character_convert . " ";
        if($number==$word_number){
            $result .= $return_words;
            return trim($result);
        }else{
            $number++;
        }
    }
}

//? bütün harfleri büyütür
function upper_case_converter($word)
{
    $low = array('a', 'b', 'c', 'ç', 'd', 'e', 'f', 'g', 'ğ', 'h', 'ı', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'ö', 'p', 'r', 's', 'ş', 't', 'u', 'ü', 'v', 'y', 'z', 'q', 'w', 'x');
    $upp = array('A', 'B', 'C', 'Ç', 'D', 'E', 'F', 'G', 'Ğ', 'H', 'I', 'İ', 'J', 'K', 'L', 'M', 'N', 'O', 'Ö', 'P', 'R', 'S', 'Ş', 'T', 'U', 'Ü', 'V', 'Y', 'Z', 'Q', 'W', 'X');
    return str_replace($low, $upp, $word);
}

//? bütün harfleri küçültür
function lower_case_converter($word)
{
    $low = array('a', 'b', 'c', 'ç', 'd', 'e', 'f', 'g', 'ğ', 'h', 'ı', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'ö', 'p', 'r', 's', 'ş', 't', 'u', 'ü', 'v', 'y', 'z', 'q', 'w', 'x');
    $upp = array('A', 'B', 'C', 'Ç', 'D', 'E', 'F', 'G', 'Ğ', 'H', 'I', 'İ', 'J', 'K', 'L', 'M', 'N', 'O', 'Ö', 'P', 'R', 'S', 'Ş', 'T', 'U', 'Ü', 'V', 'Y', 'Z', 'Q', 'W', 'X');
    return str_replace($upp, $low, $word);
}

echo first_character_case_converter("bARIŞ KURT - BARİSYAZİLİM.NET") . "<br />";
echo upper_case_converter("barış kurt - barisyazilim.net") . "<br />";
echo lower_case_converter("BARIŞ KURT - BARİSYAZİLİM.NET") . "<br />";
echo word_first_character_case_converter("bARIŞ kURT - bARİSYAZİLİM.NET") . "<br />";