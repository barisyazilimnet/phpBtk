<?php
//? çerez adı --- çerez içerigi --- çerez süresi -> çerez süresi belirtmek zorunlu degildir belirtilmezse tarayıcı kapatılınca silinir
//? çerez oluşturma ve silmede kullanılır
// setcookie("username", "barisyazilim.net"); //? çerez oluşturur
// setcookie("username", "barisyazilim.net", time() + 3600); //? çerez oluşturur
// setcookie("username", "barisyazilim.net", strtotime("+999 year")); //? çerez oluşturur
// echo "<pre>";
// print_r($_COOKIE); //? taryıcıda bulunan çerezleri ekrana yazdırır
// echo "</pre>";
// echo $_COOKIE["username"];
// setcookie("username", "", 0); //? çerezi süresi eskide kaldıgı için siler


setcookie("user[name]", "Barış");
setcookie("user[surname]", "KURT");
setcookie("user[age]", 21);

setcookie("cart[id]", 1);
setcookie("cart[total]", 5000);
setcookie("cart[payment_type]", "credit cart");
if(isset($_COOKIE)){
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
}