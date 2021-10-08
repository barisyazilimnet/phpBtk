<?php
$_encode = convert_uuencode("barisyazilim.net - Barış KURT");
echo $_encode . "<br />"; //? uu encode yapısı ile kodlanır
echo convert_uudecode($_encode);