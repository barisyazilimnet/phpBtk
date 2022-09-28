<?php if (isset($_SESSION["user"])) {
    $query = $db_con->prepare("SELECT * FROM cart  WHERE user_id = ? ORDER BY cart_id DESC");
    $query->execute([$user->user_id]);
    $cart_product_for_stock = $query->fetchAll(PDO::FETCH_OBJ);
    $total_product_count = 0;
    $total_price = 0;
    foreach ($cart_product_for_stock as $cart_product_for_stock) {
        $query = $db_con->prepare("SELECT * FROM product_variants  WHERE product_variant_id = ?");
        $query->execute([$cart_product_for_stock->variant_id]);
        $cart_product_for_variant_stock = $query->fetch(PDO::FETCH_OBJ);
        if ($cart_product_for_stock->product_quantity > $cart_product_for_variant_stock->product_variant_stock_quantity && $cart_product_for_variant_stock->product_variant_stock_quantity != 0) {
            $query = $db_con->prepare("UPDATE cart SET product_quantity = ? WHERE cart_id = ? AND user_id = ?");
            $query->execute([$cart_product_for_variant_stock->product_variant_stock_quantity, $cart_product_for_stock->cart_id, $user->user_id]);
        } elseif ($cart_product_for_variant_stock->product_variant_stock_quantity == 0) {
            $query = $db_con->prepare("DELETE FROM cart WHERE cart_id = ? AND user_id = ?");
            $query->execute([$cart_product_for_stock->cart_id, $user->user_id]);
        }
    }
    $query = $db_con->prepare("SELECT * FROM cart  WHERE user_id = ? ORDER BY cart_id DESC");
    $query->execute([$user->user_id]);
    $cart = $query->fetchAll(PDO::FETCH_OBJ);
    $total_product_count = 0;
    $total_price = 0;
    $total_shipping_price = 0;
    if ($query->rowCount()) {
        foreach ($cart as $cart_products) {
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
    $address_selection = $_POST["address_selection"];
    $shipping_company = $_POST["shipping_company"];
    $query = $db_con->prepare("UPDATE cart SET shipping_company_id = ?, address_id = ? WHERE user_id = ?");
    $query->execute([$shipping_company, $address_selection, $user->user_id]);

?>
    <form action="index.php?page_code=99" method="post">
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
                            <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Ödeme Türü Seçimi Aşağıdan Belirtebilirsin.</td>
                        </tr>
                        <tr height="40">
                            <td style="background-color: #ccc; font-weight:bold; text-align:left;">&nbsp;Ödeme Türü Seçimi</td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width: 800px; margin: 0 auto;">
                                    <tr>
                                        <td style="width:390px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:390px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/KrediKarti92x75.png" alt="KrediKarti92x75">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;"><input type="radio" id="credit_card" name="choose_payment_selection" value="credit_card"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width:20px;">&nbsp;</td>
                                        <td style="width:390px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:390px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/Banka80x75.png" alt="Banka80x75">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;"><input type="radio" id="bank_transfer" name="choose_payment_selection" value="bank_transfer"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="40" class="credit_card_seciton">
                            <td style="background-color: #ccc; font-weight:bold; width:800px; height:40px;">&nbsp;Kredi Kartı İle Ödeme</td>
                        </tr>
                        <tr height="40" class="credit_card_seciton">
                            <td style="width:800px; height:40px;">Lütfen ödeme işleminizde kullanmak istediğiniz kredi kartı markanızı seçiniz. Kredi kartınızın markası aşağıdaki listede yer almıyorsa "Diğer" seçeneğini kullanabilirsiniz. ATM ( Bankamatik ) kartı ile ödeme yapmak istiyorsanız "ATM Kart" seçeneğini kullanabilirsiniz.</td>
                        </tr>
                        <tr class="credit_card_seciton">
                            <td style="width:800px;">&nbsp;</td>
                        </tr>
                        <tr class="credit_card_seciton">
                            <td>
                                <table style="width: 800px; margin: 0 auto;">
                                    <tr>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/AxessCard46x12.png" alt="AxessCard46x12">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width: 11px;">&nbsp;</td>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/BonusCard41x12.png" alt="BonusCard41x12">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width: 11px;">&nbsp;</td>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/CardFinans78x12.png" alt="CardFinans78x12">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width: 10px;">&nbsp;</td>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/MaximumCard46x12.png" alt="MaximumCard46x12">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/WorldCard48x12.png" alt="WorldCard48x12">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width: 11px;">&nbsp;</td>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/ParafCard19x12.png" alt="ParafCard19x12">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width: 11px;">&nbsp;</td>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/OdemeSecimiDigerKartlar.png" alt="OdemeSecimiDigerKartlar">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width: 10px;">&nbsp;</td>
                                        <td style="width: 192px;">
                                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:192px;">
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <img src="img/OdemeSecimiATMKarti.png" alt="OdemeSecimiATMKarti">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="40" class="credit_card_seciton">
                            <td style="background-color: #ccc; font-weight:bold; width:800px; height:40px;">&nbsp;Taksit Seçimi</td>
                        </tr>
                        <tr height="40" class="credit_card_seciton">
                            <td style="width:800px; height:40px;">Lütfen ödeme işleminizde uygulanmasını istediğiniz taksit sayısını seçiniz.</td>
                        </tr>
                        <tr class="credit_card_seciton">
                            <td>
                                <table style="width: 800px; margin: 0 auto;">
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="1"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">Tek Çekim</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">1 x ₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="2"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">2 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">2 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 2, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="3"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">3 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">3 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 3, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="4"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">4 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">4 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 4, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="5"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">5 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">5 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 5, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="6"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">6 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">6 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 6, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="7"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">7 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">7 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 7, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="8"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">8 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">8 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 8, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                    <tr style="height: 30px;">
                                        <td style="width: 25px; border-bottom:1px dashed #ccc"><input type="radio" name="installment_selection" value="9"></td>
                                        <td style="width: 375px; border-bottom:1px dashed #ccc">9 Taksit</td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">9 x ₺ <?php echo number_format(($total_price + $total_shipping_price) / 9, 2, ",", "."); ?></td>
                                        <td style="width: 200px; border-bottom:1px dashed #ccc">₺ <?php echo number_format($total_price + $total_shipping_price, 2, ",", "."); ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="40" class="bank_transfer_seciton">
                            <td style="background-color: #ccc; font-weight:bold; width:800px; height:40px;">&nbsp;Banka Havalesi / EFT İle Ödeme</td>
                        </tr>
                        <tr height="40" class="bank_transfer_seciton">
                            <td style="width:800px; height:40px;">Banka Havalesi / eft ile ürün satın alabilmek için öncelikle alışveriş sepeti tutarını "Banka Hesaplarımız" sayfasında bulunan herhangi bir hesaba ödeme yaptıktan sonra "Havale Bildirim Formu" aracılığı ile lütfen tarafımıza bilgi veriniz. "Ödeme Yap" butonuna tıkladığınız anda siparişiniz sisteme kayıt edilecektir.</td>
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
                        <tr style="height: 5px;">
                            <td style="height: 5px; font-size: 5px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align: rigth;">
                                <input type="submit" value="ÖDEME YAP" class="shopping_complete">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<?php } else {
    echo header("Location: index.php");
} ?>