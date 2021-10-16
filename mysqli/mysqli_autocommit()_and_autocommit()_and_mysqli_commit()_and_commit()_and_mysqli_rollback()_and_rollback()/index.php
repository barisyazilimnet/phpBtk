<?php
$mysqli->autocommit(FALSE); //? veri tabanı baglantısını devre dışı bırakır
$query = $mysqli->query("UPDATE php_btk.bank_accounts SET quantity=quantity-3000 WHERE id=1");
$query1 = $mysqli->query("UPDATE php_btk.bank_accounts SET quantity=quantity+3000 WHERE id=3");

if($query and $query1){
    $mysqli->commit(); //? işlemi tamamlar
    echo "İşlem tamamlandı";
}else{
    $mysqli->rollback(); //? işlemi geri alır
    echo "Hata oluştu";
}