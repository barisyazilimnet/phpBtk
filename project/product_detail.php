<?php
@$product_id = $_REQUEST["product_id"];
@$search = $_REQUEST["search"];
$query = $db_con->prepare("UPDATE products SET product_views_number = product_views_number + 1 WHERE product_id = ? AND product_status = 1");
$query->execute([$product_id]);
$query = $db_con->prepare("SELECT * FROM products WHERE product_id = ? AND product_status = 1");
$query->execute([$product_id]);
$product = $query->fetch(PDO::FETCH_OBJ);
if ($product->product_type == "Erkek Ayakkabısı") {
    $product_type = "man";
} else if ($product->product_type == "Kadın Ayakkabısı") {
    $product_type = "woman";
} else {
    $product_type = "child";
}
if ($product->product_price_currency == "$") {
    $product_price = $product->product_price * $settings->usd;
} else if ($product->product_price_currency == "€") {
    $product_price = $product->product_price * $settings->eur;
} else if ($product->product_price_currency == "₺") {
    $product_price = $product->product_price;
}
?>
<table width="1065" style="border-collapse:collapse;">
    <tr>
        <td width="350" style="vertical-align: top;">
            <table width="350" style="border-collapse:collapse;">
                <tr>
                    <td style="border: 1px solid #ccc; text-align:center">
                        <img id="main_img" src="img/products/<?php echo $product_type, "/", $product->product_img; ?>" alt="<?php echo $product_type, "/", $product->product_img; ?>" style="width: 330px;">
                    </td>
                </tr>
                <tr style="height: 5px;">
                    <td style="font-size: 5px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="350" style="border-collapse:collapse;">
                            <tr>
                                <td width="78" style="border: 1px solid #ccc;">
                                    <img src="img/products/<?php echo $product_type, "/", $product->product_img; ?>" alt="<?php echo $product_type, "/", $product->product_img; ?>" style="width: 78px;" onclick="$.product_detail_change_img('<?php echo $product_type ?>', '<?php echo $product->product_img; ?>');">
                                </td>
                                <td width="10">&nbsp;</td>
                                <?php if ($product->product_img_1 != "") { ?>
                                    <td width="78" style="border: 1px solid #ccc;">
                                        <img src="img/products/<?php echo $product_type, "/", $product->product_img_1; ?>" alt="<?php echo $product_type, "/", $product->product_img_1; ?>" style="width: 78px;" onclick="$.product_detail_change_img('<?php echo $product_type ?>', '<?php echo $product->product_img_1; ?>');">
                                    </td>
                                <?php
                                } else {
                                    echo '<td width="78">&nbsp;</td>';
                                }
                                if ($product->product_img_2 != "") {
                                ?>
                                    <td width="10">&nbsp;</td>
                                    <td width="78" style="border: 1px solid #ccc;">
                                        <img src="img/products/<?php echo $product_type, "/", $product->product_img_2; ?>" alt="<?php echo $product_type, "/", $product->product_img_2; ?>" style="width: 78px;" onclick="$.product_detail_change_img('<?php echo $product_type ?>', '<?php echo $product->product_img_2; ?>');">
                                    </td>
                                <?php
                                } else {
                                    echo '<td width="78">&nbsp;</td>';
                                }
                                if ($product->product_img_3 != "") {
                                ?>
                                    <td width="10">&nbsp;</td>
                                    <td width="78" style="border: 1px solid #ccc;">
                                        <img src="img/products/<?php echo $product_type, "/", $product->product_img_3; ?>" alt="<?php echo $product_type, "/", $product->product_img_3; ?>" style="width: 78px;" onclick="$.product_detail_change_img('<?php echo $product_type ?>', '<?php echo $product->product_img_3; ?>');">
                                    </td>
                                <?php
                                } else {
                                    echo '<td width="78">&nbsp;</td>';
                                }
                                ?>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="350" style="border-collapse:collapse;">
                            <tr style="height: 50px;">
                                <td style="background-color: #f1f1f1;"><b>&nbsp;REKLAMLAR</b></td>
                            </tr>
                            <?php
                            $query = $db_con->prepare("SELECT * FROM banners WHERE banner_section = 'product_detail' ORDER BY banner_views_count LIMIT 1");
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
        <td width="10">&nbsp;</td>
        <td width="705" style="vertical-align: top;">
            <table width="705" style="border-collapse:collapse;">
                <tr style="height: 50px; background-color: #f1f1f1;">
                    <td style="text-align: left; font-size: 18px;"><b>&nbsp;<?php echo $product->product_name ?></b></td>
                </tr>
                <tr>
                    <td>
                        <form action="index.php?page_code=90&product_id=<?php echo $product->product_id ?>" method="post">
                            <table width="705" style="border-collapse:collapse;">
                                <tr style="height: 45px;">
                                    <td width="30">
                                        <a target="_blank" href="<?php echo decode($settings->website_facebook); ?>">
                                            <img src="img/Facebook24x24.png" alt="Facebook24x24" style="margin-top: 5px;">
                                        </a>
                                    </td>
                                    <td width="30">
                                        <a target="_blank" href="<?php echo decode($settings->website_twitter); ?>">
                                            <img src="img/Twitter24x24.png" alt="Twitter24x24" style="margin-top: 5px;">
                                        </a>
                                    </td>
                                    <?php if (@$_SESSION["user"] != "") { ?>
                                        <td width="30">
                                            <a href="index.php?page_code=86&product_id=<?php echo $product->product_id ?>">
                                                <img src="img/KalpKirmiziDaireliBeyaz24x24.png" alt="KalpKirmiziDaireliBeyaz24x24" style="margin-top: 5px;">
                                            </a>
                                        </td>
                                    <?php } else {
                                        echo '<td width="30">&nbsp;</td>';
                                    } ?>
                                    <td width="10">&nbsp;</td>
                                    <td width="605">
                                        <input type="submit" value="SEPETE EKLE" class="add_to_cart_button">
                                    </td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td colspan="5">
                                        <table width="705" style="border-collapse:collapse;">
                                            <tr style="height: 45px;">
                                                <td width="500">
                                                    <select name="variant" id="variant" class="payment_notification_select">
                                                        <option>Lütfen <?php echo $product->product_variant_header; ?> Seçiniz</option>
                                                        <?php
                                                        $query = $db_con->prepare("SELECT * FROM product_variants WHERE product_id = ? AND product_variant_stock_quantity > 0 ORDER BY product_variant_name");
                                                        $query->execute([$product_id]);
                                                        $product_variants = $query->fetchAll(PDO::FETCH_OBJ);
                                                        foreach ($product_variants as $product_variant) {
                                                        ?>
                                                            <option value="<?php echo $product_variant->product_variant_id; ?>"><?php echo $product_variant->product_variant_name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td width="205" style="text-align: right; font-size: 25px; font-weight: bold; color: #000;"><?php echo "₺ " . number_format($product_price, 2, ",", "."); ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td style="height: 20px;">
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="705" style="border-collapse:collapse;">
                            <tr style="height: 30px;">
                                <td><img src="img/SaatEsnetikGri20x20.png" alt="SaatEsnetikGri20x20" style="margin-top: 5px;" /></td>
                                <td>Siparişiniz <?php echo date("d.m.Y", $time + (3 * 86400)); ?> tarihine kadar kargoya verilecektir.</td>
                            </tr>
                            <tr style="height: 30px;">
                                <td><img src="img/SaatHizCizgiliLacivert20x20.png" alt="SaatHizCizgiliLacivert20x20" style="margin-top: 5px;" /></td>
                                <td>İlgili ürün süper hızlı gönderi kapmasındadır. Aynı gün teslimat yapılabilir.</td>
                            </tr>
                            <tr style="height: 30px;">
                                <td><img src="img/KrediKarti20x20.png" alt="KrediKarti20x20" style="margin-top: 5px;" /></td>
                                <td>Tüm bankaların kredi kartları ile peşin veya taksitli ödeme seçeneği.</td>
                            </tr>
                            <tr style="height: 30px;">
                                <td><img src="img/Banka20x20.png" alt="Banka20x20" style="margin-top: 5px;" /></td>
                                <td>Tüm bankalardan havale veya EFT ile ödeme seçeneği.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="height: 20px;">
                        <hr />
                    </td>
                </tr>
                <tr style="height: 30px;">
                    <td style="background-color: #f90;">Ürün Açıklaması</td>
                </tr>
                <tr>
                    <td><?php echo $product->product_description; ?></td>
                </tr>
                <tr>
                    <td style="height: 20px;">
                        <hr />
                    </td>
                </tr>
                <tr style="height: 30px;">
                    <td style="background-color: #f90;">Ürün Yorumları</td>
                </tr>
                <tr>
                    <td>
                        <div style="width: 705px; max-width: 705px; height: 300px; max-height: 300px; overflow-y: scroll;">
                            <table width="685" style="border-collapse:collapse;">
                                <?php
                                $query = $db_con->prepare("SELECT comments.*, users.user_name_surname FROM comments INNER JOIN users ON comments.user_id=users.user_id WHERE product_id = ? ORDER BY comment_date DESC");
                                $query->execute([$product_id]);
                                $comments = $query->fetchAll(PDO::FETCH_OBJ);
                                if ($query->rowCount()) {
                                    foreach ($comments as $comment) {
                                        if ($comment->comment_point == 1) {
                                            $comment_point_img = "YildizBirDolu.png";
                                        } else if ($comment->comment_point == 2) {
                                            $comment_point_img = "YildizIkiDolu.png";
                                        } else if ($comment->comment_point == 3) {
                                            $comment_point_img = "YildizUcDolu.png";
                                        } else if ($comment->comment_point == 4) {
                                            $comment_point_img = "YildizDortDolu.png";
                                        } else if ($comment->comment_point == 5) {
                                            $comment_point_img = "YildizBesDolu.png";
                                        }
                                ?>
                                        <tr style="height: 30px;">
                                            <td width="64"><img src="img/<?php echo $comment_point_img ?>" alt="<?php echo $comment_point_img ?>"></td>
                                            <td width="10">&nbsp;</td>
                                            <td width="451"><?php echo $comment->user_name_surname ?></td>
                                            <td width="10">&nbsp;</td>
                                            <td width="150" style="text-align: right;"><?php echo date("d.m.Y", $comment->comment_date); ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="border-bottom: 1px dashed #ccc;"><?php echo $comment->comment_text; ?></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo '<tr height="30"><td>Ürün İçin Henüz Yorum Eklenmemiştir.</td></tr>';
                                }
                                ?>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>