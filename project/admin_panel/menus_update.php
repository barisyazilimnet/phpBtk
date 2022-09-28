<?php
if (isset($_SESSION["admin_user"])) {
    $menu_id = $_GET["menu_id"];
    $query = $db_con->prepare("SELECT * FROM menus WHERE menu_id=?");
    $query->execute([$menu_id]);
    $menu = $query->fetch(PDO::FETCH_OBJ);
?>
    <form action="index.php?page_code_outside=0&page_code_inside=63&menu_id=<?php echo $menu_id ?>" method="post">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;MENÜLER</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td width="230">ÜRÜN TÜRÜ</td>
                            <td width="20"> : </td>
                            <td width="500">
                                <select name="product_type" class="selects">
                                    <option value="" selected>Lütfen Seçiniz</option>
                                    <option value="Kadın Ayakkabısı">Kadın Ayakkabısı</option>
                                    <option value="Erkek Ayakkkabısı">Erkek Ayakkkabısı</option>
                                    <option value="Çocuk Ayakkabısı">Çocuk Ayakkabısı</option>
                                    <!-- <option value="Kadın Ayakkabısı" <?php if ($menu->menu_product_type == "Kadın Ayakkkabısı") { echo "selected"; } ?>>Kadın Ayakkabısı</option>
                                    <option value="Erkek Ayakkkabısı" <?php if ($menu->menu_product_type == "Erkek Ayakkkabısı") { echo "selected"; } ?>>Erkek Ayakkkabısı</option>
                                    <option value="Çocuk Ayakkabısı" <?php if ($menu->menu_product_type == "Çocuk Ayakkkabısı") { echo "selected"; } ?>>Çocuk Ayakkabısı</option> -->
                                </select>
                            </td>
                        </tr>
                        <tr height="40">
                            <td width="230">MENÜ ADI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="name" class="inputs" value="<?php echo $menu->menu_name ?>"></td>
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