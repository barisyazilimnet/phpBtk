<?php if (isset($_SESSION["user"])) { ?>
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
                        <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Alışveriş Sepetinize Eklemiş Olduğunuz Ürünler Aşağıdadır.</td>
                    </tr>
                    <?php
                    $query = $db_con->prepare("SELECT * FROM cart  WHERE user_id = ? ORDER BY cart_id DESC");
                    $query->execute([$user->user_id]);
                    $cart = $query->fetchAll(PDO::FETCH_OBJ);
                    $total_product_count = 0;
                    $total_price = 0;
                    if ($query->rowCount()) {
                        foreach ($cart as $cart_products) {
                            $query = $db_con->prepare("SELECT * FROM products  WHERE product_id = ? LIMIT 1");
                            $query->execute([$cart_products->product_id]);
                            $product = $query->fetch(PDO::FETCH_OBJ);
                            $query = $db_con->prepare("SELECT * FROM product_variants  WHERE product_variant_id = ? LIMIT 1");
                            $query->execute([$cart_products->variant_id]);
                            $variant = $query->fetch(PDO::FETCH_OBJ);
                            if ($product->product_type == "Erkek Ayakkabısı") {
                                $path_img = "man";
                            } elseif ($product->product_type == "Kadın Ayakkabısı") {
                                $path_img = "woman";
                            } elseif ($product->product_type == "Çocuk Ayakkabısı") {
                                $path_img = "child";
                            }
                            if ($product->product_price_currency == "$") {
                                $product_price = $product->product_price * $settings->usd;
                            } else if ($product->product_price_currency == "€") {
                                $product_price = $product->product_price * $settings->eur;
                            } else if ($product->product_price_currency == "₺") {
                                $product_price = $product->product_price;
                            }
                            $total_product_count += $cart_products->product_quantity;
                            $total_price += $product_price;
                    ?>
                            <tr height="100">
                                <td style="vertical-align:bottom; font-weight:bold;">
                                    <table style="width: 800px; margin: 0 auto;">
                                        <tr>
                                            <td style="border-bottom:1px dashed #ccc; width:80px; text-align:left">
                                                <img src="img/products/<?php echo $path_img . "/" . $product->product_img; ?>" alt="<?php echo $product->product_img; ?>" width="60" height="80">
                                            </td>
                                            <td style="border-bottom:1px dashed #ccc; width:40px; text-align:left">
                                                <a href="index.php?page_code=94&cart_id=<?php echo $cart_products->cart_id; ?>">
                                                    <img src="img/SilDaireli20x20.png" alt="SilDaireli20x20">
                                                </a>
                                            </td>
                                            <td style="border-bottom:1px dashed #ccc; width:590px; text-align:left">
                                                <?php echo $product->product_name . "<br/>" . $product->product_variant_header . " : " . $variant->product_variant_name; ?>
                                            </td>
                                            <td style="border-bottom:1px dashed #ccc; width:90px; text-align:left">
                                                <table style="width: 90px; margin: 0 auto;">
                                                    <tr>
                                                        <td style="width:30px; text-align:center">
                                                            <a href="index.php?page_code=**&cart_id=<?php echo $cart_products->cart_id; ?>">
                                                                <img src="img/AzaltDaireli20x20.png" alt="AzaltDaireli20x20" style="margin-top: 5px;">
                                                            </a>
                                                        </td>
                                                        <td style="width:30px; text-align:center"><?php echo $cart_products->product_quantity; ?></td>
                                                        <td style="width:30px; text-align:center">
                                                            <a href="index.php?page_code=*****&cart_id=<?php echo $cart_products->cart_id; ?>">
                                                                <img src="img/ArttirDaireli20x20.png" alt="ArttirDaireli20x20" style="margin-top: 5px;">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td style="border-bottom:1px dashed #ccc; width:100px; text-align:right">₺ <?php echo number_format($product_price, 2, ",", "."); ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<tr height="30"><td style="vertical-align:bottom; font-weight:bold;">Alışveriş Sepetinizde Ürün Bulunmamaktadır.</td></tr>';
                    }
                    ?>
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
                    <tr>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php } else {
    echo header("Location: index.php");
} ?>