<?php
require_once "system/system.php";
$oid            =    $_POST['oid'];
$query = $db_con->prepare("SELECT installment_selection FROM cart  WHERE cart_number = ? ");
$query->execute([$oid]);
$cart_installment_selection = $query->fetch(PDO::FETCH_OBJ);
$hashparams        =    $_POST["HASHPARAMS"];
$hashparamsval    =    $_POST["HASHPARAMSVAL"];
$hashparam        =    $_POST["HASH"];
$paramsval        =    "";
$index1            =    0;
$index2            =    0;
while ($index1 < @strlen($hashparams)) {
    $index2        =    @strpos($hashparams, ":", $index1);
    $vl            =    $_POST[@substr($hashparams, $index1, $index2 - $index1)];
    if ($vl == null)
        $vl            =    "";
    $paramsval    =    $paramsval . $vl;
    $index1        =    $index2 + 1;
}
$storekey        =    $settings->storekey;    // Sanal Pos Onaylandığında Bankanın Size Verdiği Sanal Pos Ekranına Girerek Oluşturulacak Olan İş Yeri Anahtarı
$hashval        =    $paramsval . $storekey;
$hash            =    @base64_encode(@pack('H*', @sha1($hashval)));
if ($paramsval != $hashparamsval || $hashparam != $hash)
    echo "<h4>Güvenlik Uyarısı! Sayısal İmza Geçerli Değil.</h4>";

$name            =    $settings->api_user;    // Bankanın Size Verdiği Sanal Pos Ekranından Oluşturacağınız 3D Kullanıcı Adı
$password        =    $settings->api_password;    // Bankanın Size Verdiği Sanal Pos Ekranından Oluşturacağınız 3D Kullanıcı Şifresi
$clientid        =    $_POST["clientid"];
$mode            =    "P";    // P Çekim İşlemi Demek, T Test İşlemi Demek (Kesinlikle P Olacak Yoksa Çekimler Kart Sahibine Geri Gider)
$type            =    "Auth";    // Auth: Satış PreAuth: Ön Otorizasyon
$expires        =    $_POST["Ecom_Payment_Card_ExpDate_Month"] . "/" . $_POST["Ecom_Payment_Card_ExpDate_Year"];
$cv2            =    $_POST['cv2'];
$tutar            =    $_POST["amount"];
$taksit            =    ($cart_installment_selection->installment_selection > 1) ? $cart_installment_selection->installment_selection : "";    // Taksit Yapılacak İse Taksit Sayısı Girilmeli, 0 Kesinlikle Girilmeyecektir. Tek Çekim İçin Boş Bırakılacaktır, Taksit İşlemleri İçin Minimum 2 Girilir. Maksimum Bankanın Size Vereceği Taksit Sayısı Kadardır.
$lip            =    GetHostByName($REMOTE_ADDR);
$email            =    "";    //	İsterseniz Çekimi Yapan Kullanıcınızın E-Mail Adresini Gönderebilirsiniz
$mdStatus        =    $_POST['mdStatus'];
$xid            =    $_POST['xid'];
$eci            =    $_POST['eci'];
$cavv            =    $_POST['cavv'];
$md                =    $_POST['md'];

if ($mdStatus == "1" || $mdStatus == "2" || $mdStatus == "3" || $mdStatus == "4") {
    $request    =    "DATA=<?xml version=\"1.0\" encoding=\"ISO-8859-9\"?>" . "<CC5Request>" . "<Name>{NAME}</Name>" . "<Password>{PASSWORD}</Password>" . "<ClientId>{CLIENTID}</ClientId>" . "<IPAddress>{IP}</IPAddress>" . "<Email>{EMAIL}</Email>" . "<Mode>P</Mode>" . "<OrderId>{OID}</OrderId>" . "<GroupId></GroupId>" . "<TransId></TransId>" . "<UserId></UserId>" . "<Type>{TYPE}</Type>" . "<Number>{MD}</Number>" . "<Expires></Expires>" . "<Cvv2Val></Cvv2Val>" . "<Total>{TUTAR}</Total>" . "<Currency>949</Currency>" . "<Taksit>{TAKSIT}</Taksit>" . "<PayerTxnId>{XID}</PayerTxnId>" . "<PayerSecurityLevel>{ECI}</PayerSecurityLevel>" . "<PayerAuthenticationCode>{CAVV}</PayerAuthenticationCode>" . "<CardholderPresentCode>13</CardholderPresentCode>" . "<BillTo>" . "<Name></Name>" . "<Street1></Street1>" . "<Street2></Street2>" . "<Street3></Street3>" . "<City></City>" . "<StateProv></StateProv>" . "<PostalCode></PostalCode>" . "<Country></Country>" . "<Company></Company>" . "<TelVoice></TelVoice>" . "</BillTo>" . "<ShipTo>" . "<Name></Name>" . "<Street1></Street1>" . "<Street2></Street2>" . "<Street3></Street3>" . "<City></City>" . "<StateProv></StateProv>" . "<PostalCode></PostalCode>" . "<Country></Country>" . "</ShipTo>" . "<Extra></Extra>" . "</CC5Request>";
    $request    =    @str_replace("{NAME}", $name, $request);
    $request    =    @str_replace("{PASSWORD}", $password, $request);
    $request    =    @str_replace("{CLIENTID}", $clientid, $request);
    $request    =    @str_replace("{IP}", $lip, $request);
    $request    =    @str_replace("{OID}", $oid, $request);
    $request    =    @str_replace("{TYPE}", $type, $request);
    $request    =    @str_replace("{XID}", $xid, $request);
    $request    =    @str_replace("{ECI}", $eci, $request);
    $request    =    @str_replace("{CAVV}", $cavv, $request);
    $request    =    @str_replace("{MD}", $md, $request);
    $request    =    @str_replace("{TUTAR}", $tutar, $request);
    $request    =    @str_replace("{TAKSIT}", $taksit, $request);

    $url        =    "https://<sunucu_adresi>/<apiserver_path>"; // Bu Adres Banka veya EST Firması Tarafından Verilir
    $ch            =    @curl_init();
    @curl_setopt($ch, CURLOPT_URL, $url);
    @curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
    @curl_setopt($ch, CURLOPT_SSLVERSION, 3);
    @curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    @curl_setopt($ch, CURLOPT_TIMEOUT, 90);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
    $result        =    @curl_exec($ch);
    if (@curl_errno($ch)) {
        print @curl_error($ch);
    } else {
        @curl_close($ch);
    }
    $Response        =    "";
    $OrderId        =    "";
    $AuthCode        =    "";
    $ProcReturnCode    =    "";
    $ErrMsg            =    "";
    $HOSTMSG        =    "";
    $HostRefNum        =    "";
    $TransId        =    "";
    $response_tag    =    "Response";
    $posf            =    @strpos($result, ("<" . $response_tag . ">"));
    $posl            =    @strpos($result, ("</" . $response_tag . ">"));
    $posf            =    $posf + @strlen($response_tag) + 2;
    $Response        =    @substr($result, $posf, $posl - $posf);
    $response_tag    =    "OrderId";
    $posf            =    @strpos($result, ("<" . $response_tag . ">"));
    $posl            =    @strpos($result, ("</" . $response_tag . ">"));
    $posf            =    $posf + @strlen($response_tag) + 2;
    $OrderId        =    @substr($result, $posf, $posl - $posf);
    $response_tag    =    "AuthCode";
    $posf            =    @strpos($result, "<" . $response_tag . ">");
    $posl            =    @strpos($result, "</" . $response_tag . ">");
    $posf            =    $posf + @strlen($response_tag) + 2;
    $AuthCode        =    @substr($result, $posf, $posl - $posf);
    $response_tag    =    "ProcReturnCode";
    $posf            =    @strpos($result, "<" . $response_tag . ">");
    $posl            =    @strpos($result, "</" . $response_tag . ">");
    $posf            =    $posf + @strlen($response_tag) + 2;
    $ProcReturnCode    =    @substr($result, $posf, $posl - $posf);
    $response_tag    =    "ErrMsg";
    $posf            =    @strpos($result, "<" . $response_tag . ">");
    $posl            =    @strpos($result, "</" . $response_tag . ">");
    $posf            =    $posf + @strlen($response_tag) + 2;
    $ErrMsg            =    @substr($result, $posf, $posl - $posf);
    $response_tag    =    "HostRefNum";
    $posf            =    @strpos($result, "<" . $response_tag . ">");
    $posl            =    @strpos($result, "</" . $response_tag . ">");
    $posf            =    $posf + @strlen($response_tag) + 2;
    $HostRefNum        =    @substr($result, $posf, $posl - $posf);
    $response_tag    =    "TransId";
    $posf            =    @strpos($result, "<" . $response_tag . ">");
    $posl            =    @strpos($result, "</" . $response_tag . ">");
    $posf            =    $posf + @strlen($response_tag) + 2;
    $$TransId        =    @substr($result, $posf, $posl - $posf);
    if ($Response === "Approved") {
$query = $db_con->prepare("SELECT * FROM cart  WHERE cart_number = ? ");
$query->execute([$oid]);
$cart = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount()) {
    foreach ($cart as $cart_products) {
        $total_price = 0;
        $total_shipping_price = 0;
        $query = $db_con->prepare("SELECT * FROM products  WHERE product_id = ?");
        $query->execute([$cart_products->product_id]);
        $cart_products_product = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("SELECT * FROM product_variants  WHERE product_variant_id = ?");
        $query->execute([$cart_products->variant_id]);
        $cart_products_variant = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("SELECT * FROM shipping_companies  WHERE shipping_company_id = ?");
        $query->execute([$cart_products->shipping_company_id]);
        $cart_products_shipping = $query->fetch(PDO::FETCH_OBJ);
        $query = $db_con->prepare("SELECT * FROM addresses  WHERE address_id = ?");
        $query->execute([$cart_products->address_id]);
        $cart_products_address = $query->fetch(PDO::FETCH_OBJ);
        if ($cart_products_product->product_price_currency == "$") {
            $product_price = $cart_products_product->product_price * $settings->usd;
        } else if ($cart_products_product->product_price_currency == "€") {
            $product_price = $cart_products_product->product_price * $settings->eur;
        } else if ($cart_products_product->product_price_currency == "₺") {
            $product_price = $cart_products_product->product_price;
        }
        $total_price += ($product_price * $cart_products->product_quantity);
        $total_shipping_price += ($cart_products_product->product_shipping_price * $cart_products->product_quantity);
        $address_detail = $cart_products_address->address . " - " . $cart_products_address->district . " / " . $cart_products_address->province . " / " . $cart_products_address->country;
        $query = $db_con->prepare("INSERT INTO orders SET user_id = ?, order_number = ?, product_id = ?, order_product_type = ?, order_product_name = ?, order_product_price = ?, price_currency = '₺', vat_rate = ?, order_product_quantity = ?, order_product_total_amount = ?, shipping_company = ?, shipping_cost = ?, order_product_img = ?, variant_header = ?, variant_selection = ?, address_name_surname = ?, address_detail = ?, address_phone_number = ?, payment_selection = 'credit_card', installment_selection = ?, order_date = ?, order_ip_address = ?");
        $query->execute([$user->user_id, $cart_products->cart_number, $cart_products->product_id, $cart_products_product->product_type, $cart_products_product->product_name, $product_price, $cart_products_product->vat_rate, $cart_products->product_quantity, $total_price, $cart_products_shipping->shipping_company_name, $total_shipping_price, $cart_products_product->product_img, $cart_products_product->product_variant_header, $cart_products_variant->product_variant_name, $cart_products_address->name_surname, $address_detail, $cart_products_address->phone_number, $cart_installment_selection->installment_selection, $date, $ip_address]);
        if ($query->rowCount()) {
            $query = $db_con->prepare("DELETE FROM cart WHERE cart_id = ? AND user_id = ?");
            $query->execute([$cart_products->cart_id, $user->user_id]);
            $query = $db_con->prepare("UPDATE products SET product_total_sale_number = product_total_sale_number + ?  WHERE product_id = ? LIMIT 1");
            $query->execute([$cart_products->product_quantity, $cart_products->product_id]);
            $query = $db_con->prepare("UPDATE product_variants SET product_variant_stock_quantity = product_variant_stock_quantity - ? WHERE product_variant_id = ? LIMIT 1");
            $query->execute([$cart_products->product_quantity, $cart_products->variant_id]);
        }
    }
}
        // echo "Ödeme isleminiz basariyla gerçeklestirildi.";    // İster Direk Sayfayı Yönlendiririz, İstersek de Burda İşlem Yapabiliriz.
    } else {
        echo "Ödeme isleminiz sırasında hata oluştu. Hata = " . $ErrMsg;
    }
} else {
    echo "Kredi Kartı Bankası 3D Onayı Vermedi, Lütfen Bilgileriniz Kontrol Edip Tekrar Deneyiniz. Sorununuz Devam Eder İse Lütfen Kartınızın Sahibi Olan Bankanın Müşteri Temsilcileriyle İletişime Geçiniz.";
}
