<?php
echo "ceil(8.02) => " . ceil(8.02) . "<br />"; //? yukarıya dogru yuvarlar
echo "floor(8.99) => " . floor(8.99) . "<br />"; //? aşagıya dogru yuvarlar
//? en yakın sayıya yuvarlar
echo "round(8.49) => " . round(8.49) . "<br />";  
echo "round(8.50) => " . round(8.50) . "<br />";
echo "round(8.4472, 2) => " . round(8.4472, 2) . "<br />"; //? ondalık haneden ilk iki hane kalacak şekilde 3. haneden yuvarlama yapar
echo "round(8.4442, 2) => " . round(8.4442, 2) . "<br />"; //? ondalık haneden ilk iki hane kalacak şekilde 3. haneden yuvarlama yapar