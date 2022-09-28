<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;BANNER AYARLARI</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=34" style="color:#fff; text-decoration:none">+ Yeni Banner Ekle&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM banners");
        $query->execute();
        $banners = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($banners as $banner) {
        ?>
                <tr height="75">
                    <td colspan="2" style="border-bottom:1px dashed #ccc">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left:15px">
                            <tr height="50">
                                <td width="300">
                                    <img style="margin-top:5px; height:50px;" src="../img/banners/<?php echo $banner->banner_img ?>" alt="<?php echo $banner->banner_img ?>">
                                </td>
                                <td width="10">&nbsp;</td>
                                <td>
                                    <table style="border-collapse:collapse; text-align:left; width:450px;">
                                        <tr>
                                            <td width="30"><b>Adı</b></td>
                                            <td width="10"><b> : </b></td>
                                            <td width="150"><?php echo $banner->banner_name ?></td>

                                            <td width="50"><b>Alanı</b></td>
                                            <td width="10"><b> : </b></td>
                                            <td width="100"><?php echo $banner->banner_section ?></td>

                                            <td width="150"><b>Gösterim Sayısı</b></td>
                                            <td width="10"><b> : </b></td>
                                            <td width="50"><?php echo $banner->banner_views_count ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="9">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td  colspan="9">
                                                <table>
                                                    <tr>
                                                        <td width="25">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=38&banner_id=<?php echo $banner->banner_id  ?>">
                                                                <img src="../img/Guncelleme20x20.png" alt="Guncelleme20x20" />
                                                            </a>
                                                        </td>
                                                        <td width="75">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=38&banner_id=<?php echo $banner->banner_id ?>" style="color:#646464">
                                                                Güncelle
                                                            </a>
                                                        </td>
                                                        <td width="25">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=42&banner_id=<?php echo $banner->banner_id ?>">
                                                                <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                                            </a>
                                                        </td>
                                                        <td width="75">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=42&banner_id=<?php echo $banner->banner_id ?>" style="color:#646464">
                                                                Sil
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>

                                        </tr>
                                    </table>
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
                            <td>&nbsp;&nbsp;Kayıtlı Banner Bulunmamaktadır.</td>
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