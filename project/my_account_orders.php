<?php
if (isset($_SESSION["user"])) {
    $query = $db_con->prepare("SELECT DISTINCT order_number FROM orders WHERE user_id = ? ORDER BY order_number DESC");
    $query->execute([$user->user_id]);
    $total_number_records = $query->rowCount();
    $limit = 1;
    $start = ($paging * $limit) - $limit;
    $total_page_number = ceil($total_number_records / $limit);
?>
    <table style="width: 1065px">
        <tr>
            <td>
                <hr>
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
                        <td colspan="8">
                            <h3>Hesabım > Siparişler</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="8" style="border-bottom: 1px dashed #ccc; vertical-align:top;">Tüm Siparişlerinizi Bu Alandan Görüntüleyebilirsiniz.</td>
                    </tr>
                    <tr height="50">
                        <td style="background: #ccc; color:#000; width: 125px;">&nbsp;Sipariş Numarası</td>
                        <td style="background: #ccc; color:#000; width: 75px;">&nbsp;Resim</td>
                        <td style="background: #ccc; color:#000; width: 50px;">&nbsp;Yorum</td>
                        <td style="background: #ccc; color:#000; width: 415px;">&nbsp;Adı</td>
                        <td style="background: #ccc; color:#000; width: 100px;">&nbsp;Fiyat</td>
                        <td style="background: #ccc; color:#000; width: 50px;">&nbsp;Adet</td>
                        <td style="background: #ccc; color:#000; width: 100px;">&nbsp;Toplam Fiyat</td>
                        <td style="background: #ccc; color:#000; width: 150px;">&nbsp;Kargo Durumu / Takip</td>
                    </tr>
                    <?php
                    $query = $db_con->prepare("SELECT DISTINCT order_number FROM orders WHERE user_id = ? ORDER BY order_number DESC LIMIT $start, $limit");
                    $query->execute([$user->user_id]);
                    $order_numbers = $query->fetchAll(PDO::FETCH_OBJ);
                    if ($query->rowCount()) {
                        foreach ($order_numbers as $order_number) {
                            $query = $db_con->prepare("SELECT * FROM orders WHERE order_number = ? ORDER BY order_id");
                            $query->execute([$order_number->order_number]);
                            $orders = $query->fetchAll(PDO::FETCH_OBJ);
                            foreach ($orders as $order) {
                                if ($order->order_product_type == "Erkek Ayakkabısı") {
                                    $product_type = "man";
                                } else if ($order->order_product_type == "Kadın Ayakkabısı") {
                                    $product_type = "woman";
                                } else {
                                    $product_type = "child";
                                }
                    ?>
                                <tr height="50">
                                    <td style="width: 125px;">#<?php echo decode($order->order_number); ?></td>
                                    <td style="width: 75px;">
                                        <img src="img/products/<?php echo $product_type . "/" . $order->order_product_img; ?>" alt="<?php echo $order->order_product_img; ?>" style="width: 60px; height: 80px;">
                                    </td>
                                    <td style="width: 50px;"><a href="index.php?page_code=75&product_id=<?php echo $order->product_id ?>"><img src="img/DokumanKirmiziKalemli20x20.png" alt="DokumanKirmiziKalemli20x20"></a></td>
                                    <td style="width: 415px;"><?php echo decode($order->order_product_name); ?></td>
                                    <td style="width: 100px;">₺ <?php echo number_format(decode($order->order_product_price), 2, ",", "."); ?></td>
                                    <td style="width: 50px;"><?php echo decode($order->order_product_quantity); ?></td>
                                    <td style="width: 100px;">₺ <?php echo number_format(decode($order->order_product_total_amount), 2, ",", "."); ?></td>
                                    <td style="width: 150px;"><?php echo (decode($order->order_shipping_status )) ? $order->order_shipping_post_code : "Beklemede"; ?></td>
                                </tr>
                            <?php
                            }
                            echo " <tr><td colspan='8'><hr /></td></tr>";
                        }
                        if ($total_page_number > 1) {
                            ?>
                            <tr height="50">
                                <td colspan="8" style="text-align: center;">
                                    <div class="paging_container">
                                        <div class="paging_container_inside_text_container">
                                            <?php echo "Toplam " . $total_page_number . " sayfada, " . $total_number_records . " adet kayıt bulunmaktadır."; ?>
                                        </div>
                                        <div class="paging_container_inside_number_container">
                                            <?php
                                            if ($paging > 1) {
                                                echo '<span class="paging_passive"><a href="index.php?page_code=61&paging=1"><<</a></span>';
                                                echo '<span class="paging_passive"><a href="index.php?page_code=61&paging=' . ($paging - 1) . '"><</a></span>';
                                            }
                                            for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                                if ($page_index > 0 and $page_index <= $total_page_number) {
                                                    if ($page_index == $paging) {
                                                        echo '<span class="paging_active">' . $page_index . '</span>';
                                                    } else {
                                                        echo '<span class="paging_passive"><a href="index.php?page_code=61&paging=' . $page_index . '">' . $page_index . '</a></span>';
                                                    }
                                                }
                                            }
                                            if ($paging != $total_page_number) {
                                                echo '<span class="paging_passive"><a href="index.php?page_code=61&paging=' . ($paging + 1) . '">></a></span>';
                                                echo '<span class="paging_passive"><a href="index.php?page_code=61&paging=' . $total_page_number . '">>></a></span>';
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
                            <td colspan="8" style="vertical-align:bottom;">Sisteme Kayıtlı Adresiniz Bulunmamaktadır</td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
    </table>
<?php } else {
    echo header("Location: index.php");
} ?>