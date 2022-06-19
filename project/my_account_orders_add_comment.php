<?php
if (isset($_SESSION["user"])) {
    $product_id = $_GET["product_id"];
    if (!empty($product_id)) {
?>
        <table style="width: 1065px; margin: 0 auto;">
            <tr>
                <td width="500" style="vertical-align: top;">
                    <table style="width: 500px; margin: 0 auto;">
                        <tr style="height: 40px; color:#f90">
                            <td>
                                <h3>Hesabım > Yorum Yap</h3>
                            </td>
                        </tr>
                        <tr height="30">
                            <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Satın Almış Olduğunuz Ürün İle Alakalı Aşağıdan Yorumunu Belirtebilirsin.</td>
                        </tr>
                        <form action="index.php?page_code=76&product_id=<?php echo $product_id ?>" method="post">
                            <tr height="30">
                                <td style="vertical-align:bottom;">Puanlama ( * )</td>
                            </tr>
                            <tr height="30">
                                <td style="vertical-align:top;">
                                    <table style="width: 360px;">
                                        <tr>
                                            <td style="width: 64px;"><img src="img/YildizBirDolu.png" /></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px;"><img src="img/YildizIkiDolu.png" /></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px;"><img src="img/YildizUcDolu.png" /></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px;"><img src="img/YildizDortDolu.png" /></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px;"><img src="img/YildizBesDolu.png" /></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 64px; text-align:center;"><input type="radio" name="point" id="point" value="1"></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px; text-align:center;"><input type="radio" name="point" id="point" value="2"></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px; text-align:center;"><input type="radio" name="point" id="point" value="3"></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px; text-align:center;"><input type="radio" name="point" id="point" value="4"></td>
                                            <td style="width: 10px;">&nbsp;</td>
                                            <td style="width: 64px; text-align:center;"><input type="radio" name="point" id="point" value="5"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr height="30">
                                <td style="vertical-align:bottom;">Yorum Metni ( * )</td>
                            </tr>
                            <tr height="30">
                                <td style="vertical-align:top;"><textarea name="comment" id="comment" class="comment_textarea" style="resize: none;"></textarea></td>
                            </tr>
                            <tr height="40">
                                <td style="padding: 0 185px;"><input type="submit" value="Yorumu Gönder" class="green_button"></td>
                            </tr>
                        </form>
                    </table>
                </td>
                <td width="20">&nbsp;</td>
                <td width="545" style="vertical-align: top;">
                    <table style="width: 565px; margin: 0 auto;">
                        <tr style="height: 40px; color:#f90">
                            <td>
                                <h3>Reklam</h3>
                            </td>
                        </tr>
                        <tr height="30">
                            <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Barış Yazılım Reklamları.</td>
                        </tr>
                        <tr>
                            <td><img src="img/545x340Reklam.jpg" alt="545x340Reklam"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
<?php
    } else {
        header("Location: index.php?page_code=78");
    }
} else {
    header("Location: index.php");
} ?>