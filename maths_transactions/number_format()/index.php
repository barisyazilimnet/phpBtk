<?php
echo "number_format(865.4635) => " . number_format(865.4635) . "<br />"; //? en yakın tam sayıya yuvarlar
echo "number_format(865.4635, 2) => " . number_format(865.4635, 2) . "<br />"; //? ondalık hanesinden 2 karakter alarak 3. hanede yuvarlar
echo "number_format(865.4635, 2) => " . number_format(8321316565.4635, 2, ",", ".") . "<br />"; //? ondalık hanesinden 2 karakter alarak 3. hanede yuvarlar. kuruş ayracı ",", binlik ayracı "." olarak kullanılır