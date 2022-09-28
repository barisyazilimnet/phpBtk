<?php
if (isset($_SESSION["admin_user"])) {
    $order_number = $_GET["order_number"];
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;SİPARİŞ DETAY</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=102" style="color:#fff; text-decoration:none">Tamamlanan Siparişler&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM orders WHERE order_number = ?");
        $query->execute([$order_number]);
        $orders = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            $number = 0;
            foreach ($orders as $order) {
                $query = $db_con->prepare("SELECT * FROM products WHERE product_id=?");
                $query->execute([$order->product_id]);
                $o_product = $query->fetch(PDO::FETCH_OBJ);
                if ($o_product->product_type == "Erkek Ayakkabısı") {
                    $path_img = "man";
                } else if ($o_product->product_type == "Kadın Ayakkabısı") {
                    $path_img = "woman";
                } else {
                    $path_img = "child";
                }
        ?>
                <tr style="height: 225px;">
                    <td colspan="2" style="border-bottom:1px dashed #ccc; vertical-align: top;">
                        <table style="border-collapse:collapse; text-align:left; width:750px;">
                            <?php if (!$number) { ?>
                                <tr height="100" style="vertical-align: top;">
                                    <td colspan="3">
                                        <b>Adı Soyadı :</b> <?php echo $order->address_name_surname; ?><br />
                                        <b>Telefon numarası :</b> <?php echo $order->address_phone_number; ?><br />
                                        <b>Adres Detay :</b> <?php echo $order->address_detail; ?><br />
                                        <b>Kargo Gönderi Kodu :</b> <?php echo $order->order_shipping_post_code; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td style="width: 60px; vertical-align: top;">
                                    <img style="width: 60px; height: 80px;" src="../img/products/<?php echo $path_img . "/" . $o_product->product_img ?>" alt="<?php echo $o_product->product_img ?>">
                                </td>
                                <td style="width: 10px;">&nbsp;</td>
                                <td style="width: 680px; vertical-align: top;">
                                    <table style="border-collapse:collapse; text-align:left; width:680px; vertical-align: top;">
                                        <tr>
                                            <td>
                                                <b><?php echo $order->order_product_name; ?></b> ( <?php echo $order->variant_header . " : " . $order->variant_selection; ?> )
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Ürünün Birim Fiyatı :</b> <?php echo $order->price_currency . " " . number_format($order->order_product_price, 2, ",", "."); ?><br />
                                                <b>Satış Adedi :</b> <?php echo $order->order_product_quantity; ?><br />
                                                <b>KDV Oranı :</b> %<?php echo $order->vat_rate; ?><br />
                                                <b>Toplam Fiyat :</b> <?php echo $order->price_currency . " " . number_format($order->order_product_price * $order->order_product_quantity, 2, ",", "."); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Ödeme Türü :</b> <?php echo ($order->payment_selection == "credit_card") ? "Kredi Kartı" : "Banka Transfer"; ?>
                                                <?php echo ($order->payment_selection == "credit_card") ? "<br /><b>Taksit Sayısı :</b> " . $order->installment_selection : ""; ?><br />
                                                <b>Kargo Firması :</b> <?php echo $order->shipping_company; ?><br />
                                                <b>Kargo Fiyatı :</b> <?php echo "₺ " . number_format($order->shipping_cost, 2, ",", "."); ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
        <?php
                $number++;
            }
        } else {
            header("Location:index.php?page_code_outside=0&page_code_inside=0");
        }
        ?>
    </table>
<?php
} else {
    header("Location:index.php?page_code_outside=1");
}
?>