<?php
if (isset($_SESSION["user"])) {
    $query = $db_con->prepare("SELECT * FROM favorites WHERE user_id = ? ORDER BY favorite_id DESC");
    $query->execute([$user->user_id]);
    $total_number_records = $query->rowCount();
    $limit = 10;
    $start = ($paging * $limit) - $limit;
    $total_page_number = ceil($total_number_records / $limit);
?>
    <table style="width: 1065px">
        <tr>
            <td>
                <hr />
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 1065px; margin: 0 auto;">
                    <tr>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=50" style="color:#000; font-weight:bold;">Üyelik Bilgiler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=58" style="color:#000; font-weight:bold;">Adresler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=59" style="color:#000; font-weight:bold;">Favoriler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=60" style="color:#000; font-weight:bold;">Yorumlar</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=61" style="color:#000; font-weight:bold;">Şiparişler</a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td width="1065" style="vertical-align: top;">
                <table style="width: 1065px; border-collapse:collapse">
                    <tr style="height: 40px; color:#f90">
                        <td colspan="4">
                            <h3>Hesabım > Favoriler</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="4" style="border-bottom: 1px dashed #ccc; vertical-align:top;">Favorilere Eklediğiniz Tüm Ürünlerinizi Bu Alandan Görüntüleyebilirsiniz.</td>
                    </tr>
                    <tr height="50">
                        <td style="background: #ccc; color:#000; width: 75px;">&nbsp;Resim</td>
                        <td style="background: #ccc; color:#000; width: 25px;">&nbsp;</td>
                        <td style="background: #ccc; color:#000; width: 865px;">&nbsp;Adı</td>
                        <td style="background: #ccc; color:#000; width: 100px;">&nbsp;Fiyat</td>
                    </tr>
                    <?php
                    $query = $db_con->prepare("SELECT * FROM favorites WHERE user_id = ? ORDER BY favorite_id DESC LIMIT $start, $limit");
                    $query->execute([$user->user_id]);
                    $favorites = $query->fetchAll(PDO::FETCH_OBJ);
                    if ($query->rowCount()) {
                        foreach ($favorites as $favorite) {
                            $query = $db_con->prepare("SELECT * FROM products WHERE product_id = ?");
                            $query->execute([$favorite->product_id]);
                            $product = $query->fetch(PDO::FETCH_OBJ);
                            if ($product->product_type == "Erkek Ayakkabısı") {
                                $product_type = "man";
                            } else if ($product->product_type == "Kadın Ayakkabısı") {
                                $product_type = "woman";
                            } else {
                                $product_type = "child";
                            }

                    ?>
                            <tr height="50" style="text-align:left; border-bottom:1px dashed #ccc;">
                                <td style="width: 75px;">
                                    <a href="index.php?page_code=82&product_id=<?php echo $favorite->product_id; ?>">
                                        <img src="img/products/<?php echo $product_type . "/" . $product->product_img; ?>" alt="<?php echo $product->product_img; ?>" style="width: 60px; height: 80px;">
                                    </a>
                                </td>
                                <td style="width: 25px;">
                                    <a href="index.php?page_code=80&favorite_id=<?php echo $favorite->favorite_id; ?>">
                                        <img src="img/Sil20x20.png">
                                    </a>
                                </td>
                                <td style="width: 415px;">
                                    <a href="index.php?page_code=82&product_id=<?php echo $favorite->product_id; ?>" style="color:#646464; text-decoration:none;">
                                        <?php echo decode($product->product_name); ?>
                                    </a>
                                </td>
                                <td style="width: 100px;">
                                    <a href="index.php?page_code=82&product_id=<?php echo $favorite->product_id; ?>" style="color:#646464; text-decoration:none;">
                                        <?php echo decode($product->product_price_currency) . " " . number_format(decode($product->product_price), 2, ",", "."); ?>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        if ($total_page_number > 1) {
                        ?>
                            <tr height="50">
                                <td colspan="4" style="text-align: center;">
                                    <div class="paging_container">
                                        <div class="paging_container_inside_text_container">
                                            <?php echo "Toplam " . $total_page_number . " sayfada, " . $total_number_records . " adet kayıt bulunmaktadır."; ?>
                                        </div>
                                        <div class="paging_container_inside_number_container">
                                            <?php
                                            if ($paging > 1) {
                                                echo '<span class="paging_passive"><a href="index.php?page_code=59&paging=1"><<</a></span>';
                                                echo '<span class="paging_passive"><a href="index.php?page_code=59&paging=' . ($paging - 1) . '"><</a></span>';
                                            }
                                            for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                                if ($page_index > 0 and $page_index <= $total_page_number) {
                                                    if ($page_index == $paging) {
                                                        echo '<span class="paging_active">' . $page_index . '</span>';
                                                    } else {
                                                        echo '<span class="paging_passive"><a href="index.php?page_code=59&paging=' . $page_index . '">' . $page_index . '</a></span>';
                                                    }
                                                }
                                            }
                                            if ($paging != $total_page_number) {
                                                echo '<span class="paging_passive"><a href="index.php?page_code=59&paging=' . ($paging + 1) . '">></a></span>';
                                                echo '<span class="paging_passive"><a href="index.php?page_code=59&paging=' . $total_page_number . '">>></a></span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else { ?>
                        <tr height="50">
                            <td colspan="4" style="vertical-align:bottom;">Sisteme Kayıtlı Favori Ürününüz Bulunmamaktadır</td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
    </table>
<?php } else {
    echo header("Location: index.php");
} ?>