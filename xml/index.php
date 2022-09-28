<?php

// $value = '<BARISYAZILIM>
// <COMPANY-NAME>Barış Yazılım .net</COMPANY-NAME>
// <MANAGER_NAME>Barış KURT</MANAGER_NAME>
// </BARISYAZILIM>';
// $convert = simplexml_load_string($value);
// echo "<pre>";
// print_r($convert);
// echo "</pre>";
// echo $convert->{'COMPANY-NAME'} . "<br />"; //? orta tre kullanıldıgı zaman 
// echo $convert->MANAGER_NAME;

// echo "<br /><br />";

// $value1 = '<BARISYAZILIM>
// <COMPANY>Barış Yazılım .net</COMPANY>
// <MANAGER>Barış KURT</MANAGER>
// <COURSES>
//     <COURSE id="1">HTML5</COURSE>
//     <COURSE id="2">CSS3</COURSE>
//     <COURSE id="3">JAVASCRIPT</COURSE>
//     <COURSE id="4">PHP7</COURSE>
// </COURSES>
// <TEACHERS>
//     <TEACHER id="one">
//         <NAME>Volkan ALAKENT</NAME>
//         <COURSENAME>PHP7</COURSENAME>
//     </TEACHER>
//     <TEACHER id="two">
//         <NAME>Hakan ALAKENT</NAME>
//         <COURSENAME>HTML5</COURSENAME>
//     </TEACHER>
//     <TEACHER id="three">
//         <NAME>Onur TATLI</NAME>
//         <COURSENAME>CSS3</COURSENAME>
//     </TEACHER>
//     <TEACHER id="four">
//         <NAME>Ümit OKUDAN</NAME>
//         <COURSENAME>JAVASCRIPT</COURSENAME>
//     </TEACHER>
// </TEACHERS>
// </BARISYAZILIM>';
// $convert1 = simplexml_load_string($value1);
// echo "<pre>";
// print_r($convert1);
// echo "</pre>";
// echo $convert1->COMPANY . "<br />";
// echo $convert1->MANAGER . "<br />";
// echo $convert1->COURSES->COURSE[0] . "<br />";
// echo $convert1->COURSES->COURSE[1] . "<br />";
// echo $convert1->COURSES->COURSE[2] . "<br />";
// echo $convert1->COURSES->COURSE[3] . "<br />";

// echo "<br /><br />";

// $convert2 = simplexml_load_file("./basic_xml_example.xml");
// echo "<pre>";
// print_r($convert2);
// echo "</pre>";
// echo $convert2->COMPANY . "<br />";
// echo $convert2->MANAGER;

// echo "<br /><br />";

// $convert3 = simplexml_load_file("./medium_xml_example.xml");
// echo "<pre>";
// print_r($convert3);
// echo "</pre>";
// echo $convert3->COMPANY . "<br />";
// echo $convert3->MANAGER . "<br />";
// echo $convert3->COURSES->COURSE[0] . "<br />";
// echo $convert3->COURSES->COURSE[1] . "<br />";
// echo $convert3->COURSES->COURSE[2] . "<br />";
// echo $convert3->COURSES->COURSE[3] . "<br />";

// echo "<br /><br />";

// $value2 = '<BARISYAZILIM>
// <COMPANY-NAME>Barış Yazılım .net</COMPANY-NAME>
// <MANAGER_NAME>Barış KURT</MANAGER_NAME>
// <DESCRIPTON><![CDATA[Küçük işaretinin simgesi : <, büyük işaretinin simgesi : > ]]></DESCRIPTON>
// </BARISYAZILIM>';
// $convert4 = simplexml_load_string($value2, "SimpleXMLElement", LIBXML_NOCDATA); //? özel karakterler kullanıldıgı zaman cdata kullanılmalıdır
// echo "<pre>";
// print_r($convert4);
// echo "</pre>";

// $convert5 = simplexml_load_file("./basic_xml_example_1.xml", "SimpleXMLElement", LIBXML_NOCDATA);
// echo "<pre>";
// print_r($convert5);
// echo "</pre>";

// $value3 = '<BARISYAZILIM>
// <COMPANY>Barış Yazılım .net</COMPANY>
// <MANAGER>Barış KURT</MANAGER>
// <COURSES>
//     <COURSE id="1">HTML5</COURSE>
//     <COURSE id="2">CSS3</COURSE>
//     <COURSE id="3">JAVASCRIPT</COURSE>
//     <COURSE id="4">PHP7</COURSE>
// </COURSES>
// <TEACHERS>
//     <TEACHER id="one">
//         <NAME>Volkan ALAKENT</NAME>
//         <COURSENAME>PHP7</COURSENAME>
//     </TEACHER>
//     <TEACHER id="two">
//         <NAME>Hakan ALAKENT</NAME>
//         <COURSENAME>HTML5</COURSENAME>
//     </TEACHER>
//     <TEACHER id="three">
//         <NAME>Onur TATLI</NAME>
//         <COURSENAME>CSS3</COURSENAME>
//     </TEACHER>
//     <TEACHER id="four">
//         <NAME>Ümit OKUDAN</NAME>
//         <COURSENAME>JAVASCRIPT</COURSENAME>
//     </TEACHER>
// </TEACHERS>
// </BARISYAZILIM>';
// $convert6 = simplexml_load_string($value3);
// echo "<pre>";
// print_r($convert6);
// echo "</pre>";

// foreach ($convert6 as $key => $value) {
//     echo $key . " : " . $value . "<br />";
//     if ($convert6->$key->children() != "") { //? bir alt elemanları varmı kontrol eder
//         $number = 0;
//         foreach ($convert6->$key->children() as $key1 => $value1) {
//             echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $key1 . " : " . $value1 . "<br />";
//             if ($convert6->$key->$key1[$number]->children() != "") {
//                 foreach ($convert6->$key->$key1[$number]->children() as $key2 => $value2) {
//                     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $key2 . " : " . $value2 . "<br />";
//                 }
//             }
//             $number++;
//         }
//     }
// }

// echo "<br /><br />";

// $value4 = '<BARISYAZILIM>
// <COMPANY>Barış Yazılım .net</COMPANY>
// <MANAGER>Barış KURT</MANAGER>
// <COURSES>
//     <COURSE id="1">HTML5</COURSE>
//     <COURSE id="2">CSS3</COURSE>
//     <COURSE id="3">JAVASCRIPT</COURSE>
//     <COURSE id="4">PHP7</COURSE>
// </COURSES>
// <TEACHERS>
//     <TEACHER id="one">
//         <NAME>Volkan ALAKENT</NAME>
//         <COURSENAME>PHP7</COURSENAME>
//     </TEACHER>
//     <TEACHER id="two">
//         <NAME>Hakan ALAKENT</NAME>
//         <COURSENAME>HTML5</COURSENAME>
//     </TEACHER>
//     <TEACHER id="three">
//         <NAME>Onur TATLI</NAME>
//         <COURSENAME>CSS3</COURSENAME>
//     </TEACHER>
//     <TEACHER id="four">
//         <NAME>Ümit OKUDAN</NAME>
//         <COURSENAME>JAVASCRIPT</COURSENAME>
//     </TEACHER>
// </TEACHERS>
// </BARISYAZILIM>';
// $convert7 = simplexml_load_string($value4)->xpath("//COURSES/COURSE"); //? kurslar içindeki kursları verir
// echo "<pre>";
// print_r($convert7);
// echo "</pre>";

// $value5 = '<root>
// <item>
//     <stockCode><![CDATA[ACMNSWX2]]></stockCode>
//     <label><![CDATA[Kahve Deri Düz Ayakkabı]]></label>
//     <status>1</status>
//     <brand><![CDATA[Brion]]></brand>
//     <brandId>10296</brandId>
//     <barcode>97860534201</barcode>
//     <mainCategory><![CDATA[Ayakkabı]]></mainCategory>
//     <category><![CDATA[Bayan Ayakkabı]]></category>
//     <subCategory><![CDATA[Babet]]></subCategory>
//     <buyingPrice>0.000</buyingPrice>
//     <price1>143.220</price1>
//     <price2>0.000</price2>
//     <price3>0.000</price3>
//     <price4>0.000</price4>
//     <price5>0.000</price5>
//     <tax>18</tax>
//     <currencyAbbr>TL</currencyAbbr>
//     <stockAmount>1</stockAmount>
//     <stockType><![CDATA[Adet]]></stockType>
//     <warranty>24</warranty>
//     <picture1Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_01_158148_max.jpg?rev=1453707778]]></picture1Path>
//     <picture2Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_02_158148_max.jpg?rev=1453707778]]></picture2Path>
//     <picture3Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_03_158148_max.jpg?rev=1453707778]]></picture3Path>
//     <picture4Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_04_158148_max.jpg?rev=1453707778]]></picture4Path>
//     <dm3>0.0000</dm3>
//     <details><![CDATA[<div>Marka <span class="Apple-tab-span" style="white-space:pre"></span>: <span class="Apple-tab-span" style="white-space:pre"></span>Be Live</div><div>Materyal<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Deri</div><div>Taban<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Termo Hazır Taban</div>]]></details>
//     <rebate>10.00000</rebate>
//     <rebateType>1</rebateType>
//     <variants>
//         <variant>
//             <vStockCode><![CDATA[ACMNSWX2_47f080]]></vStockCode>
//             <vBarcode>97860534201-9</vBarcode>
//             <vStockAmount>1</vStockAmount>
//             <vBuyingPrice>0.000</vBuyingPrice>
//             <vPrice1>143.220</vPrice1>
//             <vPrice2>0.000</vPrice2>
//             <vPrice3>0.000</vPrice3>
//             <vPrice4>0.000</vPrice4>
//             <vPrice5>0.000</vPrice5>
//             <vRebate>10.00000</vRebate>
//             <vRebateType>1</vRebateType>
//             <vDm3>0.8000</vDm3>
//             <options>
//                 <option>
//                     <variantName><![CDATA[Renk]]></variantName>
//                     <variantValue><![CDATA[Gümüş]]></variantValue>
//                 </option>
//             </options>
//         </variant>
//     </variants>
// <specs>
//     <spec>
//         <specGroup><![CDATA[Cinsiyet]]></specGroup>
//         <specName><![CDATA[Cinsiyet]]></specName>
//         <specValue><![CDATA[Bayan]]></specValue>
//     </spec>
// </specs>
// </item>
// <item>
//     <stockCode><![CDATA[FRTYRRX2]]></stockCode>
//     <label><![CDATA[Siyah Topuklu Ayakkabı]]></label>
//     <status>1</status>
//     <brand><![CDATA[Clyde]]></brand>
//     <brandId>24590</brandId>
//     <barcode>97860586240</barcode>
//     <mainCategory><![CDATA[Ayakkabı]]></mainCategory>
//     <category><![CDATA[Bayan Ayakkabı]]></category>
//     <subCategory><![CDATA[Topuklu]]></subCategory>
//     <buyingPrice>0.000</buyingPrice>
//     <price1>272.990</price1>
//     <price2>0.000</price2>
//     <price3>0.000</price3>
//     <price4>0.000</price4>
//     <price5>0.000</price5>
//     <tax>18</tax>
//     <currencyAbbr>TL</currencyAbbr>
//     <stockAmount>1</stockAmount>
//     <stockType><![CDATA[Adet]]></stockType>
//     <warranty>24</warranty>
//     <picture1Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_01_168548_max.jpg?rev=1453707778]]></picture1Path>
//     <picture2Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_02_168548_max.jpg?rev=1453707778]]></picture2Path>
//     <picture3Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_03_168548_max.jpg?rev=1453707778]]></picture3Path>
//     <picture4Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_04_168548_max.jpg?rev=1453707778]]></picture4Path>
//     <dm3>0.0000</dm3>
//     <details><![CDATA[<div>Marka <span class="Apple-tab-span" style="white-space:pre"></span>: <span class="Apple-tab-span" style="white-space:pre"></span>End Live</div><div>Materyal<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Deri</div><div>Taban<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Kösele Hazır Taban</div>]]></details>
//     <rebate>10.00000</rebate>
//     <rebateType>1</rebateType>
//     <variants>
//         <variant>
//             <vStockCode><![CDATA[ACMNSWX2_47f080]]></vStockCode>
//             <vBarcode>97860586240-1</vBarcode>
//             <vStockAmount>1</vStockAmount>
//             <vBuyingPrice>0.000</vBuyingPrice>
//             <vPrice1>272.990</vPrice1>
//             <vPrice2>0.000</vPrice2>
//             <vPrice3>0.000</vPrice3>
//             <vPrice4>0.000</vPrice4>
//             <vPrice5>0.000</vPrice5>
//             <vRebate>10.00000</vRebate>
//             <vRebateType>1</vRebateType>
//             <vDm3>0.8000</vDm3>
//             <options>
//                 <option>
//                     <variantName><![CDATA[Renk]]></variantName>
//                     <variantValue><![CDATA[Baslıkı Siyah]]></variantValue>
//                 </option>
//             </options>
//         </variant>
//     </variants>
// <specs>
//     <spec>
//         <specGroup><![CDATA[Cinsiyet]]></specGroup>
//         <specName><![CDATA[Cinsiyet]]></specName>
//         <specValue><![CDATA[Bayan]]></specValue>
//     </spec>
// </specs>
// </item>
// </root>';
// $convert8 = simplexml_load_string($value5);
// echo "<pre>";
// print_r($convert8);
// echo "</pre>";

// $value6 = '<BARISYAZILIM>
// <COMPANY>Barış Yazılım .net</COMPANY>
// <MANAGER>Barış KURT</MANAGER>
// <COURSES>
//     <COURSE id="1">HTML5</COURSE>
//     <COURSE id="2">CSS3</COURSE>
//     <COURSE id="3">JAVASCRIPT</COURSE>
//     <COURSE id="4">PHP7</COURSE>
// </COURSES>
// <TEACHERS>
//     <TEACHER id="one" level="professional">
//         <NAME>Volkan ALAKENT</NAME>
//         <COURSENAME>PHP7</COURSENAME>
//     </TEACHER>
//     <TEACHER id="two" level="medium">
//         <NAME>Hakan ALAKENT</NAME>
//         <COURSENAME>HTML5</COURSENAME>
//     </TEACHER>
//     <TEACHER id="three" level="advanced">
//         <NAME>Onur TATLI</NAME>
//         <COURSENAME>CSS3</COURSENAME>
//     </TEACHER>
//     <TEACHER id="four" level="starter">
//         <NAME>Ümit OKUDAN</NAME>
//         <COURSENAME>JAVASCRIPT</COURSENAME>
//     </TEACHER>
// </TEACHERS>
// </BARISYAZILIM>';
// $convert9 = simplexml_load_string($value6);
// echo "<pre>";
// print_r($convert9);
// echo "</pre>";

// echo $convert9->COURSES->COURSE[0] . " -> id :" . $convert9->COURSES->COURSE[0]["id"] . "<br />";

header("Content-type: text/xml; charset=utf-8");

// $create = new SimpleXMLElement("<BARISYAZILIM/>"); //? xml in ana tagını oluşturur
// $create->addChild("COMPANY", "Barış Yazılım .net"); //? ana elemanın altına alt elemenlar oluşturur
// $create->addChild("MANAGER", "Barış KURT");
// $courses = $create->addChild("COURSES"); //? alt eleman olarak tag oluşturur    
//     $course = $courses->addChild("COURSE", "HTML5"); //? COURSES altına alt elemanlar oluşturur
//         $course->addAttribute("id", 1); //? taga özellik ekler
//     $course = $courses->addChild("COURSE", "CSS3");
//         $course->addAttribute("id", 2);
//     $course = $courses->addChild("COURSE", "JAVASCRIPT");
//         $course->addAttribute("id", 3);
//     $course = $courses->addChild("COURSE", "PHP7");
//         $course->addAttribute("id", 4);
// $teachers = $create->addChild("TEACHERS");
//     $teacher = $teachers->addChild("TEACHER");
//         $teacher->addChild("NAME", "Volkan ALAKENT");
//         $teacher->addChild("COURSENAME", "PHP7");
//         $teacher->addAttribute("id", "one");
//         $teacher->addAttribute("level", "professional");
//     $teacher = $teachers->addChild("TEACHER");
//         $teacher->addChild("NAME", "Hakan ALAKENT");
//         $teacher->addChild("COURSENAME", "HTML5");
//         $teacher->addAttribute("id", "two");
//         $teacher->addAttribute("level", "medium");
//     $teacher = $teachers->addChild("TEACHER");
//         $teacher->addChild("NAME", "Onur TATLI");
//         $teacher->addChild("COURSENAME", "CSS3");
//         $teacher->addAttribute("id", "three");
//         $teacher->addAttribute("level", "advanced");
//     $teacher = $teachers->addChild("TEACHER");
//         $teacher->addChild("NAME", "Ümit OKUDAN");
//         $teacher->addChild("COURSENAME", "JAVASCRIPT");
//         $teacher->addAttribute("id", "four");
//         $teacher->addAttribute("level", "starter");

// echo $create-> asXML(); //? xml formatının çıktısını verir

$values = array(
    "COMPANY" => "Barış Yazılım .net",
    "MANAGER" => "Barış KURT",
    "COURSES" => array(
        array(
            "content" => "HTML5",
            "id" => 1
        ),
        array(
            "content" => "CSS3",
            "id" => 2
        ),
        array(
            "content" => "JAVASCRIPT",
            "id" => 3
        ),
        array(
            "content" => "PHP7",
            "id" => 4
        ),
    ),
    "TEACHERS" => array(
        "TEACHER" => array(
            array(
                "id"  => "one",
                "level" => "professional",
                "NAME" => "Volkan ALAKENT",
                "COURSENAME" => "PHP7"
            ),
            array(
                "id"  => "two",
                "level" => "medium",
                "NAME" => "Hakan ALAKENT",
                "COURSENAME" => "HTML5"
            ),
            array(
                "id"  => "three",
                "level" => "advanced",
                "NAME" => "Onur TATLI",
                "COURSENAME" => "CSS3"
            ),
            array(
                "id"  => "four",
                "level" => "starter",
                "NAME" => "Ümit OKUDAN",
                "COURSENAME" => "JAVASCRIPT"
            )
        )
    )
);

function transaction($content, $create)
{
    foreach ($content as $key1 => $value1) {
        if (!is_array($value1)) {
            $create->addChild($key1, $value1);
        } else {
            if ($key1 == "COURSES") {
                $courses = $create->addChild("COURSES");
                foreach ($value1 as $key2 => $value2) {
                    if (is_array($value2)) {
                        foreach ($value2 as $key3 => $value3) {
                            if ($key3 == "content") {
                                $course = $courses->addChild("KURS", $value3);
                            } else {
                                $course->addAttribute($key3, $value3);
                            }
                        }
                    }
                }
            }
            if ($key1 == "TEACHERS") {
                $teachers = $create->addChild("TEACHERS");
                foreach ($value1 as $value4) {
                    if (is_array($value4)) {
                        foreach ($value4 as $key5 => $value5) {
                            $teacher = $teachers->addChild("TEACHER");
                            if (is_array($value5)) {
                                foreach ($value5 as $key6 => $value6) {
                                    ($key6 != "id" & $key6 != "level") ? $teacher->addChild($key6, $value6) : $teacher->addAttribute($key6, $value6);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return $create->asXML();
}
$result = transaction($values, new SimpleXMLElement("<BARISYAZILIM/>"));
$write = new DOMDocument;
$write->loadXML($result); //? xml i dosyaya yüklemeye hazırlar
$write->preserveWhiteSpace = false; //? boşlukları yok eder
$write->formatOutput = true; //? girdi (kod yapısındaki) yapısını etkinleştirir
$write->xmlVersion = "1.0";
$write->encoding = "utf-8";
echo $write->saveXML(); //? ekrana çıktı verir
$write->save("example.xml"); //? xml i dosyaya kaydeder