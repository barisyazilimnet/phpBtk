<?php
echo crypt("Barış KURT", "BK") . "<br />"; //? içerigin başına belirtilen 2 karakterlik tuzu ekleyerek içerigi crypt ile şifreleyip devamına ekler
echo crypt("Barış KURT", "_kurtbar7") . "<br />"; //? içerigin başına belirtilen 9 karakterlik tuzu ekleyerek içerigi crypt ile şifreleyip devamına ekler
echo crypt("Barış KURT", '$1$kurtbar_$'); //? içerigin başına belirtilen 12 karakterlik tuzu ekleyerek içerigi crypt ile şifreleyip devamına ekler