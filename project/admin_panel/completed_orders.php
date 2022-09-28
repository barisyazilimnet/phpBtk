<?php
if (isset($_SESSION["admin_user"])) {
    $query = $db_con->prepare("SELECT DISTINCT order_number FROM orders WHERE order_shipping_status=?");
    $query->execute([1]);
    $total_number_records = $query->rowCount();
    $limit = 25;
    $start = ($paging * $limit) - $limit;
    $total_page_number = ceil($total_number_records / $limit);
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;SİPARİŞLER (TAMAMLANAN)</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=101" style="color:#fff; text-decoration:none">Bekleyen Siparişler&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT DISTINCT order_number FROM orders WHERE order_shipping_status=? LIMIT $start, $limit");
        $query->execute([1]);
        $order_numbers = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($order_numbers as $order_number) {
                $query = $db_con->prepare("SELECT * FROM orders WHERE order_shipping_status=? AND order_number=?");
                $query->execute([1, $order_number->order_number]);
                $orders = $query->fetchAll(PDO::FETCH_OBJ);
                if ($query->rowCount()) {
                    $total_amount = 0;
                    foreach ($orders as $order) {
                        $p_total_amount = $order->order_product_total_amount;
                        $total_amount += $p_total_amount;
                    }
        ?>
                    <tr>
                        <td colspan="2" style="border-bottom:1px dashed #ccc">
                            <table style="border-collapse:collapse; text-align:left; width:750px; margin-left:5px;">
                                <tr style="height:30px;">
                                    <td style="text-align: left; width:120px"><b>Sipariş Tarihi</b></td>
                                    <td style="text-align: left; width:20px"><b> : </b></td>
                                    <td style="text-align: left; width:225px"><?php echo date("d.m.Y", $order->order_date); ?></td>
                                    <td style="text-align: left; width:120px"><b>Sipariş Tutarı</b></td>
                                    <td style="text-align: left; width:20px"><b> : </b></td>
                                    <td style="text-align: left; width:170px">₺ <?php echo number_format($total_amount, 2, ",", ".") ?></td>
                                    <td width="25">
                                        <a href="index.php?page_code_outside=0&page_code_inside=104&order_number=<?php echo $order_number->order_number  ?>">
                                            <img src="../img/DokumanKirmiziKalemli20x20.png" alt="Guncelleme20x20" />
                                        </a>
                                    </td>
                                    <td width="50">
                                        <a href="index.php?page_code_outside=0&page_code_inside=103&order_number=<?php echo $order_number->order_number ?>" style="color:#646464">
                                            Detay
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
            <?php
                }
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
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=102&paging=1"><<</a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=102&paging=' . ($paging - 1) . '"><</a></span>';
                                }
                                for ($page_index = $paging - 2; $page_index <= $paging + 2; $page_index++) {
                                    if ($page_index > 0 and $page_index <= $total_page_number) {
                                        if ($page_index == $paging) {
                                            echo '<span class="paging_active">' . $page_index . '</span>';
                                        } else {
                                            echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=102&paging=' . $page_index . '">' . $page_index . '</a></span>';
                                        }
                                    }
                                }
                                if ($paging != $total_page_number) {
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=102&paging=' . ($paging + 1) . '">></a></span>';
                                    echo '<span class="paging_passive"><a href="index.php?page_code_outside=0&page_code_inside=102&paging=' . $total_page_number . '">>></a></span>';
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
                            <td>&nbsp;&nbsp;Kayıtlı Sipariş Bulunmamaktadır.</td>
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