<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;DESTEK İÇERİKLERİ</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=46" style="color:#fff; text-decoration:none">+ Yeni Destek İçeriği Ekle&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM SSS");
        $query->execute();
        $SSS = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($SSS as $SSS) {
        ?>
                <tr>
                    <td colspan="2" style="border-bottom:1px dashed #ccc">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left:5px;">
                            <tr style="height:30px;">
                                <td style="text-align: left; font-weight: bold;"><?php echo $SSS->SSS_question ?></td>
                                <td style="text-align: right; width:175px;">
                                    <table style="border-collapse:collapse; text-align:right; width:175px;">
                                        <tr height="30">
                                            <td width="25">
                                                <a href="index.php?page_code_outside=0&page_code_inside=50&SSS_id=<?php echo $SSS->SSS_id  ?>">
                                                    <img src="../img/Guncelleme20x20.png" alt="Guncelleme20x20" />
                                                </a>
                                            </td>
                                            <td width="70">
                                                <a href="index.php?page_code_outside=0&page_code_inside=50&SSS_id=<?php echo $SSS->SSS_id ?>" style="color:#646464">
                                                    Güncelle
                                                </a>
                                            </td>
                                            <td width="40">
                                                <a href="index.php?page_code_outside=0&page_code_inside=54&SSS_id=<?php echo $SSS->SSS_id ?>">
                                                    <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                                </a>
                                            </td>
                                            <td width="25">
                                                <a href="index.php?page_code_outside=0&page_code_inside=54&SSS_id=<?php echo $SSS->SSS_id ?>" style="color:#646464">
                                                    Sil
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo $SSS->SSS_answer ?></td>
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
                            <td>&nbsp;&nbsp;Kayıtlı Destek İçeriği Bulunmamaktadır.</td>
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