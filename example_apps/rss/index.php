<?php
header("Content-Type: text/xmlns");
$mysqli = new mysqli("localhost", "root", "", "php_btk");
echo "<?xml version='1.0' encoding='UTF-8'?>
<rss xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xmlns:xsd='http://www.w3.org/2001/XMLSchema' version='2.0'>
    <channel>
        <title>Barış Yazılım</title>
        <description>Yazılım programcısı</description>
        <link>http://wwww.barisyazilim.net</link>
        <language>tr</language>
    </channel>
</rss>
";
?>