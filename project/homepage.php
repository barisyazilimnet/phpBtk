<table width="1065" height="100%" style="border-collapse:collapse;">
    <tr>
        <td>
            <table width="1065" style="border-collapse:collapse;">
                <?php
                $query = $db_con->prepare("SELECT * FROM banners WHERE banner_section = 'homepage' ORDER BY banner_views_count LIMIT 1");
                $query->execute();
                $banner = $query->fetch(PDO::FETCH_OBJ);
                $query = $db_con->prepare("UPDATE banners SET banner_views_count = banner_views_count + 1 WHERE banner_id = ?");
                $query->execute([$banner->banner_id]);
                ?>
                <tr style="height: 186px;">
                    <td><img src="img/banners/<?php echo $banner->banner_img ?>" alt="<?php echo $banner->banner_img ?>"></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr height="35">
        <td style="background-color: #f90; color:#fff; font-weight:bold;">&nbsp;En Yeni Ürünler</td>
    </tr>
    <tr>
        <td>
            <table width="1065" style="border-collapse:collapse;">
                <tr>
                    <?php
                    $query = $db_con->prepare("SELECT * FROM products WHERE product_status = 1 ORDER BY product_id DESC LIMIT 20");
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
                        if ($product->product_type == "Erkek Ayakkabısı") {
                            $path_img = "man";
                        } elseif ($product->product_type == "Kadın Ayakkabısı") {
                            $path_img = "woman";
                        } elseif ($product->product_type == "Çocuk Ayakkabısı") {
                            $path_img = "child";
                        }
                    ?>
                        <td width="205" style="vertical-align: top;">
                            <table style="border-collapse:collapse; vertical-align:top; margin-bottom: 10px; width: 205px;">
                                <tr>
                                    <td>
                                        <a href="urun-detay/<?php echo seo($product->product_name); ?>/<?php echo $product->product_id; ?>">
                                            <img width="205" height="273" src="img/products/<?php echo $path_img . "/" . $product->product_img ?>" alt="<?php echo $product->product_img ?>">
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="urun-detay/<?php echo seo($product->product_type); ?>/<?php echo $product->product_id; ?>" style="color:#f90; font-weight:bold; text-decoration:none;">
                                            <?php echo $product->product_type; ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="urun-detay/<?php echo seo($product->product_type); ?>/<?php echo $product->product_id; ?>" style="color:#646464; font-weight:bold; text-decoration:none;">
                                            <?php echo decode($product->product_name); ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="urun-detay/<?php echo seo($product->product_type); ?>/<?php echo $product->product_id; ?>" style="color:#646464; text-decoration:none;">
                                            <img src="img/<?php echo $product_comment_number_img ?>" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="urun-detay/<?php echo seo($product->product_type); ?>/<?php echo $product->product_id; ?>" style="color:#f00; font-weight:bold; text-decoration:none;">
                                            <?php echo "₺ " . number_format($product_price, 2, ",", "."); ?>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    <?php
                        if ($number < 5) {
                            echo "<td width='10'></td>";
                        }
                        $number++;
                        if ($number > 5) {
                            echo "</tr><tr>";
                            $number = 1;
                        }
                    }
                    ?>
                </tr>
            </table>
        </td>
    </tr>
    <tr height="35">
        <td style="background-color: #f90; color:#fff; font-weight:bold;">&nbsp;En Popüler Ürünler</td>
    </tr>
    <tr>
        <td>
            <table width="1065" style="border-collapse:collapse;">
                <tr>
                    <?php
                    $query = $db_con->prepare("SELECT * FROM products WHERE product_status = 1 ORDER BY product_views_number DESC LIMIT 20");
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
                        if ($product->product_type == "Erkek Ayakkabısı") {
                            $path_img = "man";
                        } elseif ($product->product_type == "Kadın Ayakkabısı") {
                            $path_img = "woman";
                        } elseif ($product->product_type == "Çocuk Ayakkabısı") {
                            $path_img = "child";
                        }
                    ?>
                        <td width="205" style="vertical-align: top;">
                            <table style="border-collapse:collapse; vertical-align:top; margin-bottom: 10px; width: 205px;">
                                <tr>
                                    <td>
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>">
                                            <img width="205" height="273" src="img/products/<?php echo $path_img . "/" . $product->product_img ?>" alt="<?php echo $product->product_img ?>">
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#f90; font-weight:bold; text-decoration:none;">
                                            <?php echo $product->product_type; ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#646464; font-weight:bold; text-decoration:none;">
                                            <?php echo decode($product->product_name); ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#646464; text-decoration:none;">
                                            <img src="img/<?php echo $product_comment_number_img ?>" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#f00; font-weight:bold; text-decoration:none;">
                                            <?php echo "₺ " . number_format($product_price, 2, ",", "."); ?>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    <?php
                        if ($number < 5) {
                            echo "<td width='10'></td>";
                        }
                        $number++;
                        if ($number > 5) {
                            echo "</tr><tr>";
                            $number = 1;
                        }
                    }
                    ?>
                </tr>
            </table>
        </td>
    </tr>
    <tr height="35">
        <td style="background-color: #f90; color:#fff; font-weight:bold;">&nbsp;En Çok Satan Ürünler</td>
    </tr>
    <tr>
        <td>
            <table width="1065" style="border-collapse:collapse;">
                <tr>
                    <?php
                    $query = $db_con->prepare("SELECT * FROM products WHERE product_status = 1 ORDER BY product_total_sale_number DESC LIMIT 20");
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
                        if ($product->product_type == "Erkek Ayakkabısı") {
                            $path_img = "man";
                        } elseif ($product->product_type == "Kadın Ayakkabısı") {
                            $path_img = "woman";
                        } elseif ($product->product_type == "Çocuk Ayakkabısı") {
                            $path_img = "child";
                        }
                    ?>
                        <td width="205" style="vertical-align: top;">
                            <table style="border-collapse:collapse; vertical-align:top; margin-bottom: 10px; width: 205px;">
                                <tr>
                                    <td>
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>">
                                            <img width="205" height="273" src="img/products/<?php echo $path_img . "/" . $product->product_img ?>" alt="<?php echo $product->product_img ?>">
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#f90; font-weight:bold; text-decoration:none;">
                                            <?php echo $product->product_type; ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#646464; font-weight:bold; text-decoration:none;">
                                            <?php echo decode($product->product_name); ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#646464; text-decoration:none;">
                                            <img src="img/<?php echo $product_comment_number_img ?>" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr height="25" style="text-align:center">
                                    <td width="205">
                                        <a href="index.php?page_code=82&product_id=<?php echo $product->product_id; ?>" style="color:#f00; font-weight:bold; text-decoration:none;">
                                            <?php echo "₺ " . number_format($product_price, 2, ",", "."); ?>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    <?php
                        if ($number < 5) {
                            echo "<td width='10'></td>";
                        }
                        $number++;
                        if ($number > 5) {
                            echo "</tr><tr>";
                            $number = 1;
                        }
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
            <table width="1065" style="border-collapse:collapse;">
                <tr>
                    <td width="258">
                        <table width="258" style="border-collapse:collapse; text-align: center;">
                            <tr>
                                <td><img src="img/HizliTeslimat.png" alt="HizliTeslimat"></td>
                            </tr>
                            <tr>
                                <td>Bugün Teslimat</td>
                            </tr>
                            <tr>
                                <td>Saat 14:00'a kadar verdiğiniz siparişler aynı gün kapınızda.</td>
                            </tr>
                        </table>
                    </td>
                    <td width="11">&nbsp;</td>
                    <td width="258">
                        <table width="258" style="border-collapse:collapse; text-align: center;">
                            <tr>
                                <td><img src="img/GuvenliAlisveris.png" alt="GuvenliAlisveris"></td>
                            </tr>
                            <tr>
                                <td>Tek Tıkla Güvenli Alışveriş</td>
                            </tr>
                            <tr>
                                <td>Ödeme ve adres bilgilerinizi kaydedin, güvenli alışveriş yapın.</td>
                            </tr>
                        </table>
                    </td>
                    <td width="11">&nbsp;</td>
                    <td width="258">
                        <table width="258" style="border-collapse:collapse; text-align: center;">
                            <tr>
                                <td><img src="img/MobilErisim.png" alt="MobilErisim"></td>
                            </tr>
                            <tr>
                                <td>Tüm Cihazlarla Uyumlu</td>
                            </tr>
                            <tr>
                                <td>Dilediğiniz her cihazdan sisteme erişebilir ve alışveriş yapabilirsiniz.</td>
                            </tr>
                        </table>
                    </td>
                    <td width="11">&nbsp;</td>
                    <td width="258">
                        <table width="258" style="border-collapse:collapse; text-align: center;">
                            <tr>
                                <td><img src="img/IadeGarantisi.png" alt="IadeGarantisi"></td>
                            </tr>
                            <tr>
                                <td>Kolay İade</td>
                            </tr>
                            <tr>
                                <td>Aldığınız herhangi bir ürünü 14 gün içerisinde kolaylıkla iade edebilirsiniz.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>