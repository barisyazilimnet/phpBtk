<?php
echo "Orjinal içerik <br />Merhaba nasılsın? <br />";
echo "Degiştirilen içerik <br />" . preg_quote("Merhaba nasılsın?") . "<br /><br />"; //? özel karakterlerin önüne ters slash "\" ekler

echo "Orjinal içerik <br />Merhaba nasılsın? / Nerelisin? <br />";
echo "Degiştirilen içerik <br />" . preg_quote("Merhaba nasılsın? / Nerelisin?", "/") . "<br /><br />"; 
//? özel karakterlerin önüne ters slash "\" ekler
//? özel karakterler içinde olmayanları ikinci parametre olarak eklenebilir

echo "Orjinal içerik <br />Merhaba nasılsın? / Nerelisin? <br />";
echo "Degiştirilen içerik <br />" . preg_quote("Merhaba nasılsın? / Nerelisin?", "a"); 
//? özel karakterlerin önüne ters slash "\" ekler
//? özel karakterler içinde olmayanları ikinci parametre olarak eklenebilir

/*
? Özel Karakterler
.
\
+
*
^
$
=
?
!
|
:
-
[
]
{
}
(
)
<
>
*/