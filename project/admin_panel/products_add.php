<?php
if (isset($_SESSION["admin_user"])) {
?>
    <form action="index.php?page_code_outside=0&page_code_inside=91" method="post" enctype="multipart/form-data">
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
                                    <option value="" selected>LÜTFEN SEÇİNİZ</option>
                                    <?php
                                    $query = $db_con->prepare("SELECT * FROM menus ORDER BY menu_name");
                                    $query->execute();
                                    $menus = $query->fetchAll(PDO::FETCH_OBJ);
                                    echo '<optgroup label="Erkek Ayakkkabısı">';
                                    foreach ($menus as $menu) {
                                        if ($menu->menu_product_type == "Erkek Ayakkabısı") {
                                            echo '<option value="' . $menu->menu_id . '">' . $menu->menu_name . '</option>';
                                        }
                                    }
                                    echo '</optgroup><optgroup label="Kadın Ayakkkabısı">';
                                    foreach ($menus as $menu) {
                                        if ($menu->menu_product_type == "Kadın Ayakkabısı") {
                                            echo '<option value="' . $menu->menu_id . '">' . $menu->menu_name . '</option>';
                                        }
                                    }
                                    echo '</optgroup><optgroup label="Çocuk Ayakkkabısı">';
                                    foreach ($menus as $menu) {
                                        if ($menu->menu_product_type == "Çocuk Ayakkabısı") {
                                            echo '<option value="' . $menu->menu_id . '">' . $menu->menu_name . '</option>';
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
                            <td><input type="text" name="name" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN FİYATI</td>
                            <td> : </td>
                            <td><input type="text" name="price" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>KARGO ÜCRETİ</td>
                            <td> : </td>
                            <td><input type="text" name="shipping_price" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>PARA BİRİMİ</td>
                            <td> : </td>
                            <td><select name="currency" class="selects">
                                    <option value="">LÜTFEN SEÇİNİZ</option>
                                    <option value="₺">TL (Türk Lirasi)</option>
                                    <option value="€">EUR (EURO)</option>
                                    <option value="$">USD (Dolar)</option>
                                </select></td>
                        </tr>
                        <tr height="40">
                            <td width="230">KDV ORANI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="vat_rate" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>ÜRÜN AÇIKLAMASI</td>
                            <td> : </td>
                            <td><textarea name="description" class="textareas"></textarea></td>
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
                            <td><input type="text" name="variant_header" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td colspan="3">
                                <table width="750" style="border-collapse:collapse; text-align:left;">
                                    <tr height="40">
                                        <td width="210">1.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_1" class="inputs"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">1.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_1" class="inputs"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">2.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_2" class="inputs"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">2.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_2" class="inputs"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">3.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_3" class="inputs"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">3.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_3" class="inputs"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">4.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_4" class="inputs"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">4.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_4" class="inputs"></td>
                                    </tr>
                                    <tr height="40">
                                        <td width="210">5.VARYANT ADI</td>
                                        <td width="20"> : </td>
                                        <td width="210"><input type="text" name="variant_name_5" class="inputs"></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="150">5.VARYANT STOK ADEDİ</td>
                                        <td width="20"> : </td>
                                        <td width="50"><input type="text" name="variant_stock_quantity_5" class="inputs"></td>
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