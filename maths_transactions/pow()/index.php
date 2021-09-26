<?php
    // ? sayi, üssü
echo pow(2, 3) . "<br />"; //? sayının belirtilecek deger kadar üssünü bulur -> 2*2*2
echo pow(2.8, 3) . "<br />"; 
echo pow(2, 3.56) . "<br />"; 
echo pow(2.8, 3.56) . "<br />"; 
//! üssü eksi olan degerlerde üst ondalıklı sayı olamaz
echo pow(-2, 3) . "<br />"; 
echo pow(-2.56, 3) . "<br />"; 
echo pow(2, -3) . "<br />"; 
echo pow(2.56, -3) . "<br />"; 
echo pow(-2, -3) . "<br />"; 
echo pow(-2.56, -3) . "<br />"; 