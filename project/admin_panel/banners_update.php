<?php
if (isset($_SESSION["admin_user"])) {
    $banner_id = $_GET["banner_id"];
    $query = $db_con->prepare("SELECT * FROM banners WHERE banner_id=?");
    $query->execute([$banner_id]);
    $banner = $query->fetch(PDO::FETCH_OBJ);
?>
    <form action="index.php?page_code_outside=0&page_code_inside=39&banner_id=<?php echo $banner_id ?>" method="post" enctype="multipart/form-data">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;BANNER AYARLARI</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td>BANNER RESMİ</td>
                            <td> : </td>
                            <td><input type="file" name="banner_img"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">BANNER ADI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="banner_name" class="inputs" value="<?php echo $banner->banner_name ?>"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">BANNER ALANI</td>
                            <td width="20"> : </td>
                            <td width="500">
                                <select name="banner_section" class="selects">
                                    <option value="menu_under" <?php echo ($banner->banner_section == "menu_under") ? "selected" : ""; ?>>MENÜ ALTI</option>
                                    <option value="product_detail" <?php echo ($banner->banner_section == "product_detail") ? "selected" : ""; ?>>ÜRÜN DETAY SAYFASI</option>
                                    <option value="homepage" <?php echo ($banner->banner_section == "homepage") ? "selected" : ""; ?>>ANASAYFA</option>
                                </select>
                            </td>
                        </tr>
                        <tr height="40">
                            <td colspan="3" style="text-align: right; padding-right: 3%;"><input type="submit" value="Güncelle" class="green_button"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>