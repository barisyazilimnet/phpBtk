<?php
//! karakter saymaya 0 dan başlar
$text = "PHP tüm web tabanlı programlama dilleri arasında en yaygın olarak kullanılan bir dildir. PHP yazılım dili çok üstün özelliklere sahiptir. Barış KURT bir PHP yazılımcısıdır.";
echo strpos($text, "w") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır türkçe karakterler 2 sayılır
echo strpos($text, "m", 10) . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır türkçe karakterler 2 sayılır aramaya 10. karakterden başlar ama saymaya en baştan başlar
echo mb_strpos($text, "w") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır
echo mb_strpos($text, "m", 10, "utf-8") . "<br /><br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır aramaya 10. karakterden başlar ama saymaya en baştan başlar

echo stripos($text, "W") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. türkçe karakterler 2 sayılır
echo stripos($text, "M", 10) . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. türkçe karakterler 2 sayılır aramaya 10. karakterden başlar ama saymaya en baştan başlar
echo mb_stripos($text, "W") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir.
echo mb_stripos($text, "M", 10, "utf-8") . "<br /><br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. aramaya 10. karakterden başlar ama saymaya en baştan başlar


//! aramaya sondan başlar saymaya baştan başlar
echo strrpos($text, "b") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır türkçe karakterler 2 sayılır
echo strrpos($text, "m", -20) . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır türkçe karakterler 2 sayılır aramada son 10 karakteri yok sayar
echo mb_strrpos($text, "b") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır
echo mb_strrpos($text, "m", -10, "utf-8") . "<br /><br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. büyük küçük harf duyarlıdır aramada son 10 karakteri yok sayar

echo strripos($text, "B") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. türkçe karakterler 2 sayılır
echo strripos($text, "M", -20) . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. türkçe karakterler 2 sayılır aramada son 10 karakteri yok sayar
echo mb_strripos($text, "B") . "<br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir.
echo mb_strripos($text, "M", -10, "utf-8") . "<br /><br />"; //? eşleşdigi ilk karakterin posizyon numarasını verir. aramada son 10 karakteri yok sayar