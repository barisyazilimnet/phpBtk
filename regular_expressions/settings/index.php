<?php
// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz<br />";
// preg_match_all("/barış/i", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz", $result); //? sondaki i büyük harf küçük duyarlılıgını kaldırır
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz<br />";
// preg_match_all("/[a-z]/i", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz", $result1); //? sondaki i büyük harf küçük duyarlılıgını kaldırır
// echo "<pre>";
// print_r($result1);
// echo "</pre>";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz<br />";
// $result2 = preg_split("//u", "Merhaba Benim Adım Barış KURT, Ben Bir Yazılımcıyım. Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz"); //? sondaki u unicode karakterlerin algılanmasını saglar
// echo "<pre>";
// print_r($result2);
// echo "</pre>";

// echo "Orjinal Metin<br />Привет<br />";
// $result3 = preg_split("//u", "Привет"); //? sondaki u unicode karakterlerin algılanmasını saglar
// echo "<pre>";
// print_r($result3);
// echo "</pre>";

// echo "Orjinal Metin<br />Barış KURT, PHP<br />";
// preg_match_all("/P H P/x", "Barış KURT, PHP", $result4); //? sondaki x desendeki boşluk degerlerini yok sayar
// echo "<pre>";
// print_r($result4);
// echo "</pre>";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT, 
//     Ben Bir Yazılımcıyım. 
//     Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz<br />";
// preg_match_all("/.*/s", "Merhaba Benim Adım Barış KURT, 
//     Ben Bir Yazılımcıyım. 
//     Beni Facebook Üzerinden Barış KURT Şeklinde Arayarak Bulabilirsiniz", $result5); //? sondaki s eger birden fazla satır varsa bütün satırları tek olarak algılar
// echo "<pre>";
// print_r($result5);
// echo "</pre>";

// echo "Orjinal Metin<br />A'dan Z'ye PHP7 Görsel Eğitim Seti<br />";
// preg_match_all("/^PHP7/", "A'dan Z'ye PHP7 Görsel Eğitim Seti", $result6); //? baştaki ^ işareti desen içerigin başında mı diye kontrol eder
// echo "<pre>";
// print_r($result6);
// echo "</pre>";
// //! genellikle alttaki şekilde kullanılır
// echo "Orjinal Metin<br />A'dan Z'ye PHP7 Görsel Eğitim Seti<br />";
// $result7 = preg_match("/^PHP7/", "A'dan Z'ye PHP7 Görsel Eğitim Seti"); //? baştaki ^ işareti desen içerigin başında mı diye kontrol eder
// echo ($result7) ? "Desen içerigin başındadir" : "Desen içerigin başında degildir";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Ders Konusu : PHP<br />";
// preg_match_all("/PHP$/", "Ders Konusu : PHP", $result8); //? sondaki $ işareti desen içerigin sonunda mı diye kontrol eder
// echo "<pre>";
// print_r($result8);
// echo "</pre>";
// //! genellikle alttaki şekilde kullanılır
// echo "Orjinal Metin<br />Ders Konusu : PHP<br />";
// $result9 = preg_match("/PHP$/", "Ders Konusu : PHP"); //? sondaki $ işareti desen içerigin sonunda mı diye kontrol eder
// echo ($result9) ? "Desen içerigin sonundadır" : "Desen içerigin sonunda degildir";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan<br />";
// preg_match_all("/\ban/", "Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan", $result10); //? baştaki \b işareti desen içerikteki kelimelerin başında mı diye kontrol eder
// echo "<pre>";
// print_r($result10);
// echo "</pre>";
// //! genellikle alttaki şekilde kullanılır
// echo "Orjinal Metin<br />Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan<br />";
// $result11 = preg_match("/\ban/", "Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan"); //? baştaki \b işareti desen içerikteki kelimelerin başında mı diye kontrol eder
// echo ($result11) ? "Desen içerikte kelimelerin başındadır" : "Desen içerikte kelimelerin başında degildir";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan<br />";
// preg_match_all("/an\b/", "Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan", $result12); //? sondaki \b işareti desen içerikteki kelimelerin sonunda mı diye kontrol eder
// echo "<pre>";
// print_r($result12);
// echo "</pre>";
// //! genellikle alttaki şekilde kullanılır
// echo "Orjinal Metin<br />Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan<br />";
// $result13 = preg_match("/an\b/", "Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan"); //? sondaki \b işareti desen içerikteki kelimelerin sonunda mı diye kontrol eder
// echo ($result13) ? "Desen içerikte kelimelerin sonundadır" : "Desen içerikte kelimelerin sonunda degildir";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan<br />";
// preg_match_all("/i\B/", "Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan", $result14); //? sondaki \B işareti desen içerikteki kelimelerin ortasında mı diye kontrol eder
// //! \B işareti sonda veya başta olması önemli degildir ama sonda olması önerilir
// echo "<pre>";
// print_r($result14);
// echo "</pre>";
// //! genellikle alttaki şekilde kullanılır
// echo "Orjinal Metin<br />Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan<br />";
// $result15 = preg_match("/i\B/", "Barış, Gülşah, Beyhan, Ali, İbrahim, Semih, Erkan"); //? sondaki \B işareti desen içerikteki kelimelerin ortasında mı diye kontrol eder
// echo ($result15) ? "Desen içerikte kelimelerin ortasındadır" : "Desen içerikte kelimelerin ortasında degildir";

// echo "<br /><br />";

// echo "Orjinal Metin<br />PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır<br />";
// preg_match_all("/PHP(?='yi)/i", "PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır", $result16); //? sondaki (?=değer) desen ile başlayıp sonrasında belirtilen deger ile devam eden kelimeyi bulur
// echo "<pre>";
// print_r($result16);
// echo "</pre>";

// echo "Orjinal Metin<br />PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır<br />";
// preg_match_all("/PHP(?= )/i", "PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır", $result17); //? sondaki (?=değer) desen ile başlayıp sonrasında belirtilen deger ile devam eden kelimeyi bulur
// echo "<pre>";
// print_r($result17);
// echo "</pre>";

// echo "Orjinal Metin<br />PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır<br />";
// preg_match_all("/PHP(?!'yi)/i", "PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır", $result16); //? sondaki (?=değer) desen ile başlayıp sonrasında belirtilen deger ile devam etmeyen kelimeyi bulur
// echo "<pre>";
// print_r($result16);
// echo "</pre>";

// echo "Orjinal Metin<br />PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır<br />";
// preg_match_all("/PHP(?! )/i", "PHP dünya üzerinde en yaygın olarak kullanılan bir web programlama dilidir ve php'yi ögrenmesi çok kolaydır", $result17); //? sondaki (?=değer) desen ile başlayıp sonrasında belirtilen deger ile devam etmeyen kelimeyi bulur
// echo "<pre>";
// print_r($result17);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021<br />";
// preg_match_all("/-{2}/", "Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021", $result18); //? -{2} ifadesi - işaretinden 2li olanları bulur
// echo "<pre>";
// print_r($result18);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021<br />";
// preg_match_all("/-{2,}/", "Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021", $result19); //? -{2,} ifadesi - işaretinden en az 2li olanları bulur
// echo "<pre>";
// print_r($result19);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021<br />";
// preg_match_all("/-{1,2}/", "Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021", $result20); //? -{1,3} ifadesi - işaretinden en az 1li ve en fazla 2li olanları bulur
// echo "<pre>";
// print_r($result20);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021<br />";
// preg_match_all("/-+/", "Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021", $result21); //? -+ ifadesi - işaretinden en az 1 defa tekrarlanmış olanları bulur
// echo "<pre>";
// print_r($result21);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021<br />";
// preg_match_all("/-*/", "Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021", $result22); //? -* ifadesi - işaretinden en az 0 defa tekrarlanmış olanları bulur
// echo "<pre>";
// print_r($result22);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021<br />";
// preg_match_all("/-?/", "Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021", $result23); //? -? ifadesi - işaretinden 0 yada 1 defa tekrarlanmış olanları bulur
// echo "<pre>";
// print_r($result23);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021<br />";
// preg_match_all("/(b)(a)(r)(ı)(ş)/i", "Barış KURT - barisyazilim.net -- Yazılım uzmanı --- 2021", $result24); //? deseni hem tek tek hemde grup halinde bulur
// echo "<pre>";
// print_r($result24);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Volkan Hakan Serkan<br />";
// preg_match_all("/(Vol|Ha|Ser)kan/", "Volkan Hakan Serkan", $result25); //? hem volkanı hem hakanı hem Serkanı hem vol u hem Ser i hemde ha yı bulur  -- istenen kadar | eklenebilir
// echo "<pre>";
// print_r($result25);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Hakan Alakent, Merhaba Hasan Alakent, Merhaba Harun Alakent<br />";
// preg_match_all("/Ha("?":kan|run)/", "Merhaba Hakan Alakent, Merhaba Hasan Alakent, Merhaba Harun Alakent", $result26); //? ?: alt grup oluşturmak için kullanılır
// echo "<pre>";
// print_r($result26);
// echo "</pre>";
// echo "Orjinal Metin<br />Merhaba Hakan Alakent, Merhaba Hasan Alakent, Merhaba Harun Alakent<br />";
// $result27 = preg_match("/Ha(?:kan)/", "Merhaba Hakan Alakent, Merhaba Hasan Alakent, Merhaba Harun Alakent"); //? ?: alt grup oluşturmak için kullanılır
// echo ($result27) ? "Hakan degeri bulunmaktadır" : "Hakan degeri bulunmamaktadır";

// echo "<br /><br />";

// echo "Orjinal Metin<br />11 + 11 = 22<br />";
// preg_match_all("/\+/", "11 + 11 = 22", $result28); //? + degeri bir belirleyici oldugu için ters slash kullanılarak özel bir karakter oldugu söleniyor \ sonra gelen karakter özel bir karakter oldugu belirlenir
// echo "<pre>";
// print_r($result28);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT<br />";
// preg_match_all("/[barış]/iu", "Merhaba Benim Adım Barış KURT", $result29); //? [] içinde belirlenen karakterleri tek tek arama yapar
// echo "<pre>";
// print_r($result29);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 2000 dogumluyum<br />";
// preg_match_all("/[a-z]/iu", "Merhaba Benim Adım Barış KURT. 2000 dogumluyum", $result30); //? [] içinde belirlenen iki karakter aralıgında arama yapar (karakter aralıgı alfabe sıralamasına göre belirlenir)
// echo "<pre>";
// print_r($result30);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 2000 dogumluyum<br />";
// preg_match_all("/[0-9]/", "Merhaba Benim Adım Barış KURT. 2000 dogumluyum", $result31); //? [] içinde belirlenen iki karakter aralıgında arama yapar 
// echo "<pre>";
// print_r($result31);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 2000 dogumluyum<br />";
// preg_match_all("/[a-z0-9]/iu", "Merhaba Benim Adım Barış KURT. 2000 dogumluyum", $result32); //? [] içinde belirlenen iki karakter aralıgında arama yapar (karakter aralıgı alfabe sıralamasına göre belirlenir)
// echo "<pre>";
// print_r($result32);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 2000 dogumluyum<br />";
// preg_match_all("/[a-z0-9\.]/iu", "Merhaba Benim Adım Barış KURT. 2000 dogumluyum", $result32); //? [] içinde belirlenen iki karakter aralıgında arama yapar (karakter aralıgı alfabe sıralamasına göre belirlenir)
// echo "<pre>";
// print_r($result32);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 2000 dogumluyum<br />";
// preg_match_all("/[^barış]/iu", "Merhaba Benim Adım Barış KURT. 2000 dogumluyum", $result33); //? [^] içinde belirlenen karakterler dışında olan karakterleri bulur
// echo "<pre>";
// print_r($result33);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 2000 dogumluyum<br />";
// preg_match_all("/[^a-z]/iu", "Merhaba Benim Adım Barış KURT. 2000 dogumluyum", $result34); //? [^] içinde belirlenen karakter aralıgı dışında olan karakterleri bulur
// echo "<pre>";
// print_r($result34);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 2000 dogumluyum<br />";
// preg_match_all("/./u", "Merhaba Benim Adım Barış KURT. 2000 dogumluyum", $result35); //? . karakteri yeni satır karakteri hariç bütün karakterleri alır
/*
? yeni satır karakterleri
\n
\r
<br />
*/
// echo "<pre>";
// print_r($result35);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.<br />";
// preg_match_all("/\w/u", "Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.", $result36); //? \w harf, rakam, ve _ eşlenen degerleri bulur.
// echo "<pre>";
// print_r($result36);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.<br />";
// preg_match_all("/\W/u", "Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.", $result37); //? \W harf, rakam, ve _ dışında eşlenen degerleri bulur.
// echo "<pre>";
// print_r($result37);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.<br />";
// preg_match_all("/\d/u", "Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.", $result38); //? \d sadece rakam karakterleriyle eşleşir
// echo "<pre>";
// print_r($result38);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.<br />";
// preg_match_all("/\D/u", "Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.", $result39); //? \D rakam dışındaki karakterlerle eşleşir
// echo "<pre>";
// print_r($result39);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.<br />";
// preg_match_all("/\s/u", "Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.", $result40); //? \s sadece boşluk karakterleriyle eşleşir
// echo "<pre>";
// print_r($result40);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.<br />";
// preg_match_all("/\S/u", "Merhaba Benim Adım Barış KURT. 1 + 4 * 5 işleminin sonucu 21'dir. Bu içerikte _ yoktur.", $result41); //? \S boşluk dışındaki karakterlerle eşleşir
// echo "<pre>";
// print_r($result41);
// echo "</pre>";

// echo "<br /><br />";

// echo "Orjinal Metin<br />Barış KURT<br />";
// preg_match("/(?<name>Barış) (?<surname>KURT)/", "Barış KURT", $result42); //? degerlere anahtar degeri aktarılır
// echo "<pre>";
// print_r($result42);
// echo "</pre>";

// echo "<br /><br />";