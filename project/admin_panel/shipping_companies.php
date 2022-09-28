<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;KARGO AYARLARI</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=22" style="color:#fff; text-decoration:none">+ Yeni Kargo Firması Ekle&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM shipping_companies");
        $query->execute();
        $shipping_companies = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($shipping_companies as $shipping_company) {
        ?>
                <tr height="50">
                    <td colspan="2" style="border-bottom:1px dashed #ccc">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left:15px">
                            <tr height="35">
                                <td width="200">
                                    <img style="margin-top:5px" src="../img/<?php echo $shipping_company->shipping_company_logo ?>" alt="<?php echo $shipping_company->shipping_company_logo ?>">
                                </td>
                                <td width="10">&nbsp;</td>
                                <td width="150"><b>Kargo Firması</b></td>
                                <td width="20"><b> : </b></td>
                                <td width="170"><?php echo $shipping_company->shipping_company_name ?></td>
                                <td width="10">&nbsp;</td>
                                <td width="25">
                                    <a href="index.php?page_code_outside=0&page_code_inside=26&shipping_company_id=<?php echo $shipping_company->shipping_company_id  ?>">
                                        <img src="../img/Guncelleme20x20.png" alt="Guncelleme20x20" />
                                    </a>
                                </td>
                                <td width="75">
                                    <a href="index.php?page_code_outside=0&page_code_inside=26&shipping_company_id=<?php echo $shipping_company->shipping_company_id ?>" style="color:#646464">
                                        Güncelle
                                    </a>
                                </td>
                                <td width="25">
                                    <a href="index.php?page_code_outside=0&page_code_inside=30&shipping_company_id=<?php echo $shipping_company->shipping_company_id ?>">
                                        <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                    </a>
                                </td>
                                <td width="75">
                                    <a href="index.php?page_code_outside=0&page_code_inside=30&shipping_company_id=<?php echo $shipping_company->shipping_company_id ?>" style="color:#646464">
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
                            <td>&nbsp;&nbsp;Kayıtlı Kargo Firması Bulunmamaktadır.</td>
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