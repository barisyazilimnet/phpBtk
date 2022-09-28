<?php
@$menu_id = $_REQUEST["menu_id"];
$menu_sql = ($menu_id) ? " AND menu_id = '$menu_id' " : "";
$menu_paging = ($menu_id) ? "&menu_id=$menu_id" : "";
@$search = $_REQUEST["search"];
$search_sql = ($search) ? " AND product_name LIKE '%" . $_REQUEST["search"] . "%'" : "";
$search_paging = ($search) ? "&search=$search" : "";
$query = $db_con->prepare("SELECT * FROM products WHERE product_type = 'Erkek Ayakkabısı' AND product_status = 1 $menu_sql $search_sql ORDER BY product_id DESC");
$query->execute();
$total_number_records = $query->rowCount();
$limit = 10;
$start = ($paging * $limit) - $limit;
$total_page_number = ceil($total_number_records / $limit);
$query = $db_con->prepare("SELECT SUM(menu_product_number) AS menus_total_product_count FROM menus WHERE menu_product_type = 'Erkek Ayakkabısı' ");
$query->execute();
$menus = $query->fetch(PDO::FETCH_OBJ);
?>
<table width="1065" style="border-collapse:collapse;">
    <tr style="height: 100px;">
        <td style="width: 250px;">
            <table width="250" style="border-collapse:collapse;">
                <tr>
                    <td>
                        <table width="250" style="border-collapse:collapse;">
                            <tr style="height: 50px;">
                                <td style="background-color: #f1f1f1;"><b>&nbsp;MENÜLER</b></td>
                            </tr>
                            <tr style="height: 30px;">
                                <td><a style="text-decoration: none; <?php echo ($menu_id == "") ? "color: #f90;" : "color: #646464;"; ?>  font-weight: bold;" href="index.php?page_code=83">&nbsp;Tüm Ürünler ( <?php echo $menus->menus_total_product_count;  ?> )</a></td>
                            </tr>
                            <?php
                            $query = $db_con->prepare("SELECT * FROM menus WHERE menu_product_type = 'Erkek Ayakkabısı' ORDER BY menu_name");
                            $query->execute();
                            $menus = $query->fetchAll(PDO::FETCH_OBJ);
                            foreach ($menus as $menu) {
                            ?>
                                <tr style="height: 30px;">
                                    <td><a style="text-decoration: none; <?php echo ($menu_id == $menu->menu_id) ? "color: #f90;" : "color: #646464;"; ?>  font-weight: bold;" href="index.php?page_code=83&menu_id=<?php echo $menu->menu_id; ?>">&nbsp;<?php echo decode($menu->menu_name); ?> ( <?php echo $menu->menu_product_number; ?> )</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="250" style="border-collapse:collapse;">
                            <tr style="height: 50px;">
                                <td style="background-color: #f1f1f1;"><b>&nbsp;REKLAMLAR</b></td>
                            </tr>
                            <?php
                            $query = $db_con->prepare("SELECT * FROM banners WHERE banner_section = 'menu_under' ORDER BY banner_views_count LIMIT 1");
                            $query->execute();
                            $banner = $query->fetch(PDO::FETCH_OBJ);
                            $query = $db_con->prepare("UPDATE banners SET banner_views_count = banner_views_count + 1 WHERE banner_id = ?");
                            $query->execute([$banner->banner_id]);
                            ?>
                            <tr style="height: 250px;">
                                <td><img src="img/banners/<?php echo $banner->banner_img ?>" alt="<?php echo $banner->banner_img ?>"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
        <td style="width: 10px;">&nbsp;</td>
        <td style="width: 805px; vertical-align:top;">
            <table width="805" style="border-collapse:collapse;">
                <tr>
                    <td>
                        <div class="search_section">
                            <form action="index.php?page_code=83" method="POST">
                                <input type="hidden" name="menu_id" value="<?php echo $menu_id ?>">
                                <div class="search_section_button_container"><input type="submit" value="" class="search_section_button"></div>
                                <div class="search_section_input_container"><input type="text" name="search" class="search_section_input"></div>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="805" style="border-collapse:collapse;">
                            <tr>
                                <?php
                                $query = $db_con->prepare("SELECT * FROM products WHERE product_type = 'Erkek Ayakkabısı' AND product_status = 1 $menu_sql $search_sql ORDER BY product_id DESC LIMIT $start, $limit");
                                $query->execute();
                                $products = $query->fetchAll(PDO::FETCH_OBJ);
                                $number = 1;
                                foreach ($products as $product) {
                                    if ($product->product_price_currency == "$") {
                                        $product_price = $product->product_price * $settings->usd;
                                    } else if ($product->product_price_currency == "€") {
                                        $product_price = $product->product_price * $settings->eur;
                                    } else if ($product->product_price_currency == "₺") {
                                        $product_price = $product->product_price;
                                    }
                                    $product_comment_point = ($product->product_comment_number) ? number_format($product->product_total_comment_point / $product->product_comment_number, 2, ".", "") : "0";
                                    if ($product_comment_point == 0) {
                                        $product_comment_number_img = "YildizCizgiliBos.png";
                                    } else if ($product_comment_point > 0 and $product_comment_point <= 1) {
                                        $product_comment_number_img = "YildizCizgiliBirDolu.png";
                                    } else if ($product_comment_point > 1 and $product_comment_point <= 2) {
                                        $product_comment_number_img = "YildizCizgiliIkiDolu.png";
                                    } else if ($product_comment_point > 2 and $product_comment_point <= 3) {
                                        $product_comment_number_img = "YildizCizgiliUcDolu.png";
                                    } else if ($product_comment_point > 3 and $product_comment_point <= 4) {
                                        $product_comment_number_img = "YildizCizgiliDortDolu.png";
                                    } else if ($product_comment_point > 4 and $product_comment_point <= 5) {
                                        $product_comment_number_img = "YildizCizgiliBesDolu.png";
                                    }
                                ?>
                                    <td width="190" style="vertical-align: top;">
                                        <table style="border-collapse:collapse; vertical-align:top; margin-bottom: 10px; width: 190px;">
                                            <tr>
                                                <td>
                                                    <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>">
                                                        <img width="185" height="247" src="img/products/man/<?php echo $product->product_img ?>" alt="<?php echo $product->product_img ?>">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr height="25" style="text-align:center">
                                                <td width="190">
                                                    <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#f90; font-weight:bold; text-decoration:none;">
                                                        Erkek Ayakkabısı
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr height="25" style="text-align:center">
                                                <td width="190">
                                                    <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#646464; font-weight:bold; text-decoration:none;">
                                                        <?php echo decode($product->product_name); ?>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr height="25" style="text-align:center">
                                                <td width="190">
                                                    <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#646464; text-decoration:none;">
                                                        <img src="img/<?php echo $product_comment_number_img ?>" alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr height="25" style="text-align:center">
                                                <td width="190">
                                                    <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#f00; font-weight:bold; text-decoration:none;">
                                                        <?php echo "₺ " . number_format($product_price, 2, ",", "."); ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                <?php
                                    if ($number < 4) {
                                        echo "<td width='10'></td>";
                                    }
                                    $number++;
                                    if ($number > 4) {
                                        echo "</tr><tr>";
                                        $number = 1;
                                    }
                                }
                                ?>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?php
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
                                        echo '<span class="paging_passive"><a href="index.php?page_code=83&paging=1' . $menu_paging . $search_paging . '"><<</a></span>';
                                        echo '<span class="paging_passive"><a href="index.php?page_code=83&paging=' . ($paging - 1) . $menu_paging . $search_paging . '"><</a></span>';
                                    }
                                    for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                        if ($page_index > 0 and $page_index <= $total_page_number) {
                                            if ($page_index == $paging) {
                                                echo '<span class="paging_active">' . $page_index . '</span>';
                                            } else {
                                                echo '<span class="paging_passive"><a href="index.php?page_code=83&paging=' . $page_index . $menu_paging . $search_paging . '">' . $page_index . '</a></span>';
                                            }
                                        }
                                    }
                                    if ($paging != $total_page_number) {
                                        echo '<span class="paging_passive"><a href="index.php?page_code=83&paging=' . ($paging + 1) . $menu_paging . $search_paging . '">></a></span>';
                                        echo '<span class="paging_passive"><a href="index.php?page_code=83&paging=' . $total_page_number . $menu_paging . $search_paging . '">>></a></span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </td>
    </tr>
</table>