<?php
if (isset($_SESSION["admin_user"])) {
    $product_id = $_GET["product_id"];
    $query = $db_con->prepare("SELECT * FROM products WHERE product_id=?");
    $query->execute([$product_id]);
    $product = $query->fetch(PDO::FETCH_OBJ);
    $query = $db_con->prepare("SELECT * FROM product_variants WHERE product_id=?");
    $query->execute([$product_id]);
    $product_variants = $query->fetchAll(PDO::FETCH_OBJ);
    $v_name = [];
    $v_stock_quantity = [];
    foreach ($product_variants as $pt) {
        $v_name[] = $pt->product_variant_name;
        $v_stock_quantity[] = $pt->product_variant_stock_quantity;
    }

?>
    <form action="index.php?page_code_outside=0&page_code_inside=95&product_id=<?php echo $product_id ?>" method="post" enctype="multipart/form-data">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;ÜRÜNLER</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td width="230">ÜRÜN MENÜSÜ</td>
                            <td width="20"> : </td>
                            <td width="500">
                                <select name="menu_id" class="selects">
                                    <?php
                                    $query = $db_con->prepare("SELECT * FROM menus WHERE menu_product_type =? ORDER BY menu_name");
                                    $query->execute([$product->product_type]);
                                    $menus = $query->fetchAll(PDO::FETCH_OBJ);
                                    echo '<optgroup label="Erkek Ayakkkabısı">';
                                    foreach ($menus as $menu) {
                                        if ($menu->menu_product_type == "Erkek Ayakkabısı") {
                                    ?>
                                            <option value="<?php echo $menu->menu_id ?>" <?php echo ($product->menu_id == $menu->menu_id) ? "selected" : ""; ?>>
                                                <?php echo $menu->menu_name ?>
                                            </option>
                                        <?php
                                        }
                                    }
                                    echo '</optgroup><optgroup label="Kadın Ayakkkabısı">';
                                    foreach ($menus as $menu) {
                                        if ($menu->menu_product_type == "Kadın Ayakkabısı") {
                                        ?>
                                            <option value="<?php echo $menu->menu_id ?>" <?php echo ($product->menu_id == $menu->menu_id) ? "selected" : ""; ?>>
                                                <?php echo $menu->menu_name ?>
                                            </option>
                                        <?php
                                        }
                                    }
                                    echo '</optgroup><optgroup label="Çocuk Ayakkkabısı">';
                                    foreach ($menus as $menu) {
                                        if ($menu->menu_product_type == "Çocuk Ayakkabısı") {
                                        ?>
                                            <option value="<?php echo $menu->menu_id ?>" <?php echo ($product->menu_id == $menu->menu_id) ? "selected" : ""; ?>>
                                                <?php echo $menu->menu_name ?>
                                            </option>
                                    <?php
                                        }
                                    }
                                    echo '</optgroup>';
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN ADI</td>
                            <td> : </td>
                            <td><input type="text" name="name" class="inputs" value="<?php echo $product->product_name ?>"></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN FİYATI</td>
                            <td> : </td>
                            <td><input type="text" name="price" class="inputs" value="<?php echo $product->product_price ?>"></td>
                        </tr>
                        <tr height="40">
                            <td>KARGO ÜCRETİ</td>
                            <td> : </td>
                            <td><input type="text" name="shipping_price" class="inputs" value="<?php echo $product->product_shipping_price ?>"></td>
                        </tr>
                        <tr height="40">
                            <td>PARA BİRİMİ</td>
                            <td> : </td>
                            <td><select name="currency" class="selects">
                                    <option value="₺" <?php echo ($product->product_price_currency == "₺") ? "selected" : ""; ?>>TL (Türk Lirasi)</option>
                                    <option value="€" <?php echo ($product->product_price_currency == "€") ? "selected" : ""; ?>>EUR (EURO)</option>
                                    <option value="$" <?php echo ($product->product_price_currency == "$") ? "selected" : ""; ?>>USD (Dolar)</option>
                                </select></td>
                        </tr>
                        <tr height="40">
                            <td width="230">KDV ORANI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="vat_rate" class="inputs" value="<?php echo $product->vat_rate ?>"></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN AÇIKLAMASI</td>
                            <td> : </td>
                            <td><textarea name="description" class="textareas"><?php echo $product->product_description ?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN RESMİ 1</td>
                            <td> : </td>
                            <td><input type="file" name="img_1"></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN RESMİ 2</td>
                            <td> : </td>
                            <td><input type="file" name="img_2"></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN RESMİ 3</td>
                            <td> : </td>
                            <td><input type="file" name="img_3"></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN RESMİ 4</td>
                            <td> : </td>
                            <td><input type="file" name="img_4"></td>
                        </tr>
                        <tr height="40">
                            <td>VARYANT BAŞLIĞI</td>
                            <td> : </td>
                            <td><input type="text" name="variant_header" class="inputs" value="<?php echo $product->product_variant_header ?>"></td>
                        </tr>
                        <tr height="40">
                            <td colspan="3">
                                <table width="750" style="border-collapse:collapse; text-align:left;">
                                    <tr height="40">
                                        <td width="210">1.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_1" class="inputs" value="<?php echo (array_key_exists(0, $v_name)) ? $v_name[0] : ""; ?>"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">1.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_1" class="inputs" value="<?php echo (array_key_exists(0, $v_name)) ? $v_stock_quantity[0] : ""; ?>"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">2.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_2" class="inputs" value="<?php echo (array_key_exists(1, $v_name)) ? $v_name[1] : ""; ?>"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">2.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_2" class="inputs" value="<?php echo (array_key_exists(1, $v_name)) ? $v_stock_quantity[1] : ""; ?>"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">3.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_3" class="inputs" value="<?php echo (array_key_exists(2, $v_name)) ? $v_name[2] : ""; ?>"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">3.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_3" class="inputs" value="<?php echo (array_key_exists(2, $v_name)) ? $v_stock_quantity[2] : ""; ?>"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">4.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_4" class="inputs" value="<?php echo (array_key_exists(3, $v_name)) ? $v_name[3] : ""; ?>"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">4.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_4" class="inputs" value="<?php echo (array_key_exists(3, $v_name)) ? $v_stock_quantity[3] : ""; ?>"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">5.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_5" class="inputs" value="<?php echo (array_key_exists(4, $v_name)) ? $v_name[4] : ""; ?>"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">5.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_5" class="inputs" value="<?php echo (array_key_exists(4, $v_name)) ? $v_stock_quantity[4] : ""; ?>"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="40">
                            <td colspan="3" style="text-align: right; padding-right: 3%;"><input type="submit" value="Ekle" class="green_button"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>