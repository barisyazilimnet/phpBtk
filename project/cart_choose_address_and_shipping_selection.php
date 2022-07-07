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
?>
    <form action="index.php?page_code=98" method="post">
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
                            <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Adres ve Kargo Seçimi Aşağıdan Belirtebilirsin.</td>
                        </tr>
                        <tr height="40">
                            <td style="background-color: #ccc; font-weight:bold; text-align:left;">&nbsp;Adres Seçimi</td>
                        </tr>
                        <tr height="20">
                            <td style="text-align:right;"><a href="index.php?page_code=70" style="font-weight:bold; color:#646464">+ Yeni Adres Ekle</a></td>
                        </tr>
                        <?php
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
                            $query = $db_con->prepare("SELECT * FROM addresses WHERE user_id = ?");
                            $query->execute([$user->user_id]);
                            $addresses = $query->fetchAll(PDO::FETCH_OBJ);
                            if ($query->rowCount()) {
                                foreach ($addresses as $address) {

                        ?>
                                    <tr>
                                        <td style="font-weight:bold;">
                                            <table style="width: 800px; margin: 0 auto;">
                                                <tr height="50">
                                                    <td style="width: 25px; border-bottom:1px dashed #ccc">
                                                        <input type="radio" name="address_selection" value="<?php echo $address->address_id; ?>">
                                                    </td>
                                                    <td style="width: 775px; border-bottom:1px dashed #ccc">
                                                        <?php echo decode($address->name_surname); ?> -
                                                        <?php echo decode($address->address); ?>
                                                        <?php echo decode($address->district); ?> /
                                                        <?php echo decode($address->province); ?> /
                                                        <?php echo decode($address->country); ?>
                                                        <?php echo decode($address->phone_number); ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<tr height="30"><td>Sisteme Kayıtlı Adresiniz Bulunmamaktadır. Lütfen Öncelikle hesabım alanından adres ekleyiniz. Adres eklemek için lütfen <a href="index.php?page_code=70" style="font-weight:bold; color:#646464">buraya tıklayınız</a>.</td></tr>';
                            }
                            ?>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr height="40">
                                <td style="background-color: #ccc; font-weight:bold;">&nbsp;Kargo Firması Seçimi</td>
                            </tr>
                        <?php
                        } else {
                            header("Location:index.php?page_code=93");
                        }
                        ?>
                    </table>
                    <table width="800" height="100%" style="border-collapse:collapse; vertical-align:top">
                        <tr style="vertical-align:top;">
                            <?php
                            $query = $db_con->prepare("SELECT * FROM shipping_companies");
                            $query->execute();
                            $shipping_companies = $query->fetchAll(PDO::FETCH_OBJ);
                            $number = 1;
                            foreach ($shipping_companies as $shipping_company) {
                            ?>
                                <td width="260">
                                    <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px; width:260px;">
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr height="40">
                                            <td style="text-align: center;">
                                                <img src="img/<?php echo decode($shipping_company->shipping_company_logo) ?>" alt="<?php echo $shipping_company->shipping_company_logo ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><input type="radio" name="shipping_company" value="<?php echo decode($shipping_company->shipping_company_id) ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            <?php
                                if ($number < 3) {
                                    echo "<td width='10'></td>";
                                }
                                $number++;
                                if ($number > 3) {
                                    echo "</tr><tr>";
                                    $number = 1;
                                }
                            }
                            ?>
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
                                <input type="submit" value="ÖDEME SEÇİMİ" class="shopping_complete">
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