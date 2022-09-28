<?php
$_date = date_modify(date_create("2000-01-30"), "+3 hour"); //? yeni oluşturulan tarihi 3 saat ileri alır
echo "<pre>";
print_r($_date);
echo "</pre>";

$_date1 = date_modify(date_create("2000-01-30"), "-3 hour"); //? yeni oluşturulan tarihi 3 saat geri alır
echo "<pre>";
print_r($_date1);
echo "</pre>";

$_date2 = date_create("2000-01-30");
date_modify($_date2, "+1 year"); //? yeni oluşturulan tarihi 1 yıl ekler
date_modify($_date2, "+2 month"); //? yeni oluşturulan tarihi 2 ay ekler
date_modify($_date2, "+3 day"); //? yeni oluşturulan tarihi 3 gün ekler
date_modify($_date2, "+12 hour"); //? yeni oluşturulan tarihi 12 saat ekler
date_modify($_date2, "+45 minute"); //? yeni oluşturulan tarihi 45 dakika ekler
date_modify($_date2, "+5 second"); //? yeni oluşturulan tarihi 5 saniye ekler
echo "<pre>";
print_r($_date2);
echo "</pre>";

$_date3 = date_create("2000-01-30");
date_modify($_date3, "-1 year"); //? yeni oluşturulan tarihi 1 yıl geri alır
date_modify($_date3, "-2 month"); //? yeni oluşturulan tarihi 2 ay geri alır
date_modify($_date3, "-3 day"); //? yeni oluşturulan tarihi 3 gün geri alır
date_modify($_date3, "-12 hour"); //? yeni oluşturulan tarihi 12 saatgeri alır
date_modify($_date3, "-45 minute"); //? yeni oluşturulan tarihi 45 dakika geri alır
date_modify($_date3, "-5 second"); //? yeni oluşturulan tarihi 5 saniye geri alır
echo "<pre>";
print_r($_date3);
echo "</pre>";


$_date4 = date_create("2000-01-30");
date_add($_date4, date_interval_create_from_date_string("+1 year")); //? yeni oluşturulan tarihi 1 yıl ekler
date_add($_date4, date_interval_create_from_date_string("+2 month")); //? yeni oluşturulan tarihi 2 ay ekler
date_add($_date4, date_interval_create_from_date_string("+3 day")); //? yeni oluşturulan tarihi 3 gün ekler
date_add($_date4, date_interval_create_from_date_string("+12 hour")); //? yeni oluşturulan tarihi 12 saat ekler
date_add($_date4, date_interval_create_from_date_string("+45 minute")); //? yeni oluşturulan tarihi 45 dakika ekler
date_add($_date4, date_interval_create_from_date_string("+5 second")); //? yeni oluşturulan tarihi 5 saniye ekler
echo "<pre>";
print_r($_date4);
echo "</pre>";

$_date5 = date_create("2000-01-30");
date_add($_date5, date_interval_create_from_date_string("-1 year")); //? yeni oluşturulan tarihi 1 yıl geri alır
date_add($_date5, date_interval_create_from_date_string("-2 month")); //? yeni oluşturulan tarihi 2 ay geri alır
date_add($_date5, date_interval_create_from_date_string("-3 day")); //? yeni oluşturulan tarihi 3 gün geri alır
date_add($_date5, date_interval_create_from_date_string("-12 hour")); //? yeni oluşturulan tarihi 12 saat geri alır
date_add($_date5, date_interval_create_from_date_string("-45 minute")); //? yeni oluşturulan tarihi 45 dakika geri alır
date_add($_date5, date_interval_create_from_date_string("-5 second")); //? yeni oluşturulan tarihi 5 saniye geri alır
echo "<pre>";
print_r($_date5);
echo "</pre>";