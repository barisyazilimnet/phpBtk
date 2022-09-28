<?php if (isset($_SESSION["user"])) {
    $query = $db_con->prepare("SELECT * FROM cart  WHERE user_id = ? ORDER BY cart_id DESC");
    $query->execute([$user->user_id]);
    $cart = $query->fetchAll(PDO::FETCH_OBJ);
    $total_product_count = 0;
    $total_price = 0;
    $total_shipping_price = 0;
    if ($query->rowCount()) {
        foreach ($cart as $cart_products) {
            $order_number = $cart_products->cart_number;
            $query = $db_con->prepare("SELECT * FROM products  WHERE product_id = ? LIMIT 1");
            $query->execute([$cart_products->product_id]);
            $product = $query->fetch(PDO::FETCH_OBJ);
            if ($product->product_price_currency == "$") {
                $product_price = $product->product_price * $settings->usd;
            } else if ($product->product_price_currency == "€") {
                $product_price = $product->product_price * $settings->eur;
            } else if ($product->product_price_currency == "₺") {
                $product_price = $product->product_price;
            }
            $total_product_count += $cart_products->product_quantity;
            $total_price += ($product_price * $cart_products->product_quantity);
            $total_shipping_price += ($product->product_shipping_price * $cart_products->product_quantity);
        }
    }
    $clientId        =    $settings->client_id;    //	Bankadan Sanal Pos Onaylanınca Bankanın Verdiği İşyeri Numarası
    $amount            =    number_format($total_price + $total_shipping_price, 2, ",", ".");    //	Sepet Ücreti yada İşlem Tutarı yada Karttan Çekilecek Tutar
    $oid            =    $order_number;    //	Sipariş Numarası (Tekrarlanmayan Bir Değer) (Örneğin Sepet Tablosundaki IDyi Kullanabilirsiniz) (Her İşlemde Değişmeli ve Asla Tekrarlanmamalı)
    $okUrl            =    "http://www.barisyazilim.net/cart_credit_cart_payment_OK.php";    //	Ödeme İşlemi Başarıyla Gerçekleşir ise Dönülecek Sayfa
    $failUrl        =    "http://www.barisyazilim.net/cart_credit_cart_payment_ERROR.php";    //	Ödeme İşlemi Red Olur ise Dönülecek Sayfa
    $rnd            =    @microtime();
    $storekey        =    $settings->store_key;    // Sanal Pos Onaylandığında Bankanın Size Verdiği Sanal Pos Ekranına Girerek Oluşturulacak Olan İş Yeri Anahtarı
    $storetype        =    "3d";    //	3D Modeli
    $hashstr        =    $clientId . $oid . $amount . $okUrl . $failUrl . $rnd . $storekey;    // Bankanın Kendi Ayarladığı Hash Parametresi
    $hash            =    @base64_encode(@pack('H*', @sha1($hashstr)));    // Bankanın Kendi Ayarladığı Hash Şifreleme Parametresi
    $description    =    "";    //	Extra Bir Açıklama Yazmak İsterseniz Çekim İle İlgili Buraya Yazıyoruz
    $xid            =    "";        //	20 bytelik, 28 Karakterli base64 Olarak Boş Bırılınca Sistem Tarafindan Ototmatik Üretilir. Lütfen Boş Bırakın
    $lang            =    "";        //	Çekim Gösterim Dili Default Türkçedir. Ayarlamak İsterseniz Türkçe (tr), İngilizce (en) Girilmelidir. Boş Bırakılırsa (tr) Kabu Edilmiş Olur.
    $email            =    "";    //	İsterseniz Çekimi Yapan Kullanıcınızın E-Mail Adresini Gönderebilirsiniz
    $userid            =    "";    //	İsterseniz Çekimi Yapan Kullanıcınızın Idsini Gönderebilirsiniz
?>
    <form method="post" action="index.php?page_code=103"><!-- https://<sunucu_adresi>/<3dgate_path> -->
        <!-- Bu Adres Banka veya EST Firması Tarafından Verilir -->
        <input type="hidden" name="clientid" value="<?= $clientId ?>" />
        <input type="hidden" name="amount" value="<?= $amount ?>" />
        <input type="hidden" name="oid" value="<?= $oid ?>" />
        <input type="hidden" name="okUrl" value="<?= $okUrl ?>" />
        <input type="hidden" name="failUrl" value="<?= $failUrl ?>" />
        <input type="hidden" name="rnd" value="<?= $rnd ?>" />
        <input type="hidden" name="hash" value="<?= $hash ?>" />
        <input type="hidden" name="storetype" value="3d" />
        <input type="hidden" name="lang" value="tr" />
        <table style="width: 1065px; margin: 0 auto;">
            <tr>
                <td width="800" style="vertical-align: top;">
                    <table style="width: 800px; margin: 0 auto;">
                        <tr style="height: 40px; color:#f90">
                            <td>
                                <h3>Alışveriş Sepeti</h3>
                            </td>
                        </tr>
                        <tr height="30">
                            <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Kredi Kartı Bilgilerini Aşağıdan Belirtebilirsin ve Ödeme Yapabilirsin.</td>
                        </tr>
                        <tr height="40" class="credit_card_seciton">
                            <td style="background-color: #ccc; font-weight:bold; width:800px; height:40px;">&nbsp;Kredi Kartı İle Ödeme</td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width: 800px; margin: 0 auto;">
                                    <tr height="40">
                                        <td width="250">Kredi Kart Numarası</td>
                                        <td width="550" colspan="4"><input type="text" name="pan" class="payment_notification_inputs" />
                                    </tr>
                                    <tr height="40">
                                        <td>Son Kullanma Tarihi</td>
                                        <td width="150">
                                            <select name="Ecom_Payment_Card_ExpDate_Month" class="payment_notification_select">
                                                <option value=""></option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </td>
                                        <td width="20" style="text-align:center">-</td>
                                        <td width="150">
                                            <select name="Ecom_Payment_Card_ExpDate_Year" class="payment_notification_select">
                                                <option value=""></option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>
                                        </td>
                                        <td width="230">&nbsp;</td>
                                    </tr>
                                    <tr height="40">
                                        <td>Kart Türü</td>
                                        <td colspan="4"><input type="radio" value="1" name="cardType"> Visa <input type="radio" value="2" name="cardType"> MasterCard</td>
                                    </tr>
                                    <tr height="40">
                                        <td>Güvenlik Kodu</td>
                                        <td colspan="3" width="250"><input type="text" name="cv2" size="4" value="" class="payment_notification_inputs" /></td>
                                        <td width="300">&nbsp;</td>
                                    </tr>
                                    <tr height="40">
                                        <td style="text-align:center">&nbsp;</td>
                                        <td colspan="4" style="text-align:left"><input type="submit" value="Ödeme Yap" class="green_button" /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="15">&nbsp;</td>
                <td width="250" style="vertical-align: top;">
                    <table style="width: 250px; margin: 0 auto; text-align:right">
                        <tr style="height: 40px; color:#f90">
                            <td>
                                <h3>Sipariş Özeti</h3>
                            </td>
                        </tr>
                        <tr height="30">
                            <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Toplam <span style="color: #f00; font-weight:bold"><?php echo $total_product_count; ?></span> Adet Ürün.</td>
                        </tr>
                        <tr style="height: 5px;">
                            <td style="height: 5px; font-size: 5px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Ödenecek Tutar ( KDV Dahil )</td>
                        </tr>
                        <tr>
                            <td style="font-size: 25px; font-weight: bold;">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                        </tr>
                        <tr style="height: 5px;">
                            <td style="height: 5px; font-size: 5px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Ürünler Toplam Tutarı ( KDV Dahil )</td>
                        </tr>
                        <tr>
                            <td style="font-size: 25px; font-weight: bold;">₺ <?php echo number_format($total_price, 2, ",", "."); ?></td>
                        </tr>
                        <tr style="height: 5px;">
                            <td style="height: 5px; font-size: 5px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Toplam Kargo Ücreti ( KDV Dahil )</td>
                        </tr>
                        <tr>
                            <td style="font-size: 25px; font-weight: bold;">₺ <?php echo number_format($total_shipping_price, 2, ",", "."); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<?php } else {
    echo header("Location: index.php");
} ?>