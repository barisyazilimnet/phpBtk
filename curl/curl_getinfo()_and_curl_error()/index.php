<?php
$ch = curl_init("https://www.turkcell.com.tr");
curl_exec($ch);
echo "<pre>";
print_r(curl_getinfo($ch));
echo "</pre>";
echo curl_error($ch);
curl_close($ch);