<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;MENÜLER</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=58" style="color:#fff; text-decoration:none">+ Yeni Menü Ekle&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM menus ORDER BY menu_product_type, menu_name");
        $query->execute();
        $menus = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($menus as $menu) {
        ?>
                <tr>
                    <td colspan="2" style="border-bottom:1px dashed #ccc">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left:5px;">
                            <tr style="height:30px;">
                                <td style="text-align: left; font-weight: bold; width:200px"><?php echo $menu->menu_product_type ?></td>
                                <td style="text-align: left; width:400px"><?php echo $menu->menu_name . "(" . $menu->menu_product_number . ")"; ?></td>
                                <td width="25">
                                    <a href="index.php?page_code_outside=0&page_code_inside=62&menu_id=<?php echo $menu->menu_id  ?>">
                                        <img src="../img/Guncelleme20x20.png" alt="Guncelleme20x20" />
                                    </a>
                                </td>
                                <td width="70">
                                    <a href="index.php?page_code_outside=0&page_code_inside=62&menu_id=<?php echo $menu->menu_id ?>" style="color:#646464">
                                        Güncelle
                                    </a>
                                </td>
                                <td width="25">
                                    <a href="index.php?page_code_outside=0&page_code_inside=66&menu_id=<?php echo $menu->menu_id ?>">
                                        <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                    </a>
                                </td>
                                <td width="30">
                                    <a href="index.php?page_code_outside=0&page_code_inside=66&menu_id=<?php echo $menu->menu_id ?>" style="color:#646464">
                                        Sil
                                    </a>
                                </td>
                            </tr>
                        </table>
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
                            <td>&nbsp;&nbsp;Kayıtlı Menü Bulunmamaktadır.</td>
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