<?php
if (isset($_SESSION["admin_user"])) {
    @$search = $_REQUEST["search"];
    $search_sql = ($search) ? " WHERE product_name LIKE '%" . $_REQUEST["search"] . "%'" : "";
    $search_paging = ($search) ? "&search=$search" : "";
    $query = $db_con->prepare("SELECT * FROM products $search_sql");
    $query->execute();
    $total_number_records = $query->rowCount();
    $limit = 10;
    $start = ($paging * $limit) - $limit;
    $total_page_number = ceil($total_number_records / $limit);

?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;ÜRÜNLER</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=90" style="color:#fff; text-decoration:none">+ Yeni Ürün Ekle&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="search_section">
                    <form action="index.php?page_code_outside=0&page_code_inside=89" method="POST">
                        <div class="search_section_button_container"><input type="submit" value="" class="search_section_button"></div>
                        <div class="search_section_input_container"><input type="text" name="search" class="search_section_input"></div>
                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>

        <?php
        $query = $db_con->prepare("SELECT * FROM products $search_sql ORDER BY product_id DESC LIMIT $start, $limit");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($products as $product) {
                $query = $db_con->prepare("SELECT * FROM menus WHERE menu_id=?");
                $query->execute([$product->menu_id]);
                $menu = $query->fetch(PDO::FETCH_OBJ);
                if ($product->product_type == "Erkek Ayakkabısı") {
                    $path_img = "man";
                } else if ($product->product_type == "Kadın Ayakkabısı") {
                    $path_img = "woman";
                } else {
                    $path_img = "child";
                }
        ?>
                <tr style="height: 125px;">
                    <td colspan="2" style="border-bottom:1px dashed #ccc; vertical-align: top;">
                        <table style="border-collapse:collapse; text-align:left; width:750px;">
                            <tr>
                                <td style="width: 60px; vertical-align: top;">
                                    <img style="width: 60px; height: 80px;" src="../img/products/<?php echo $path_img . "/" . $product->product_img ?>" alt="<?php echo $product->product_img ?>">
                                </td>
                                <td style="width: 10px;">&nbsp;</td>
                                <td style="width: 680px; vertical-align: top;">
                                    <table style="border-collapse:collapse; text-align:left; width:680px; vertical-align: top;">
                                        <tr>
                                            <td colspan="2"><?php echo $menu->menu_product_type . " >> " . $menu->menu_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><?php echo $product->product_name . " / " . $product->product_price_currency . " " .  $product->product_price; ?> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Toplam Satış Adedi : <?php echo $product->product_total_sale_number; ?><br />
                                                Toplam Yorum Sayısı/Puanı : <?php echo $product->product_comment_number . " / " . $product->product_total_comment_point; ?><br />
                                                Toplam Görüntülenme Sayısı : <?php echo $product->product_views_number; ?>
                                            </td>
                                            <td width="130" style="vertical-align: bottom; ">
                                                <table style="border-collapse:collapse; text-align:right; width:130px; ">
                                                    <tr>
                                                        <td width="25">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=94&product_id=<?php echo $product->product_id ?>">
                                                                <img src="../img/Guncelleme20x20.png" alt="Guncelleme20x20" />
                                                            </a>
                                                        </td>
                                                        <td width="75">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=94&product_id=<?php echo $product->product_id ?>" style="color:#646464">
                                                                Güncelle
                                                            </a>
                                                        </td>
                                                        <td width="50">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=98&product_id=<?php echo $product->product_id ?>">
                                                                <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                                            </a>
                                                        </td>
                                                        <td width="25">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=98&product_id=<?php echo $product->product_id ?>" style="color:#646464">
                                                                Sil
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>

                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            <?php
            }
            if ($total_page_number > 1) {
            ?>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr height="50">
                    <td style="text-align: center;">
                        <div class="paging_container">
                            <div class="paging_container_inside_text_container">
                                <?php echo "Toplam " . $total_page_number . " sayfada, " . $total_number_records . " adet kayıt bulunmaktadır."; ?>
                            </div>
                            <div class="paging_container_inside_number_container">
                                <?php
                                if ($paging > 1) {
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=89&paging=1' . $search_paging . '"><<</a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=89&paging=' . ($paging - 1) . $search_paging . '"><</a></span>';
                                }
                                for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                    if ($page_index > 0 and $page_index <= $total_page_number) {
                                        if ($page_index == $paging) {
                                            echo '<span class="paging_active">' . $page_index . '</span>';
                                        } else {
                                            echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=89&paging=' . $page_index . $search_paging . '">' . $page_index . '</a></span>';
                                        }
                                    }
                                }
                                if ($paging != $total_page_number) {
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=89&paging=' . ($paging + 1) . $search_paging . '">></a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=89&paging=' . $total_page_number . $search_paging . '">>></a></span>';
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="2">
                    <table style="border-collapse:collapse; text-align:left; width:750px;">
                        <tr>
                            <td>&nbsp;&nbsp;Kayıtlı Ürün Bulunmamaktadır.</td>
                        </tr>
                    </table>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>