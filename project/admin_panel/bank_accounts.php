<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff; width:560px">
                <h3>&nbsp;BANKA HESAP AYARLARI</h3>
            </td>
            <td style="background-color:#f90; width:200px">
                <a href="index.php?page_code_outside=0&page_code_inside=10" style="color:#fff; text-decoration:none">+ Yeni Banka Hesabı Ekle&nbsp;</a>
            </td>
        </tr>
        <tr height="10">
            <td colspan="2"></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM bank_accounts");
        $query->execute();
        $bank_accounts = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($bank_accounts as $bank_account) {
        ?>
                <tr height="100">
                    <td colspan="2" style="border-bottom:1px dashed #ccc">
                        <table style="border-collapse:collapse; text-align:left; width:750px;">
                            <tr height="90">
                                <td width="200">
                                    <table style="border-collapse:collapse; text-align:left; width:200px;">
                                        <tr>
                                            <td>
                                                <img src="../img/<?php echo $bank_account->bank_logo ?>" alt="<?php echo $bank_account->bank_logo ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table style="border-collapse:collapse; text-align:left; width:200px;">
                                                    <tr>
                                                        <td width="25">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=14&bank_account_id=<?php echo $bank_account->bank_account_id ?>">
                                                                <img src="../img/Guncelleme20x20.png" alt="Guncelleme20x20" />
                                                            </a>
                                                        </td>
                                                        <td width="75">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=14&bank_account_id=<?php echo $bank_account->bank_account_id ?>" style="color:#646464">
                                                                Güncelle
                                                            </a>
                                                        </td>
                                                        <td width="25">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=18&bank_account_id=<?php echo $bank_account->bank_account_id ?>">
                                                                <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                                            </a>
                                                        </td>
                                                        <td width="75">
                                                            <a href="index.php?page_code_outside=0&page_code_inside=18&bank_account_id=<?php echo $bank_account->bank_account_id ?>" style="color:#646464">
                                                                Sil
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="10">&nbsp;</td>
                                <td width="540">
                                    <table style="border-collapse:collapse; text-align:left; width:540px;">
                                        <tr height="30">
                                            <td width="100"><b>Banka Adı</b></td>
                                            <td width="20"><b> : </b></td>
                                            <td width="140"><?php echo $bank_account->bank_name ?></td>
                                            <td width="115"><b>Hesap Sahibi</b></td>
                                            <td width="20"><b> : </b></td>
                                            <td width="145"><?php echo $bank_account->account_holder ?></td>
                                        </tr>
                                        <tr height="30">
                                            <td colspan="6" width="540">
                                                <table style="border-collapse:collapse; text-align:left; width:540px;">
                                                    <tr>
                                                        <td width="200"><b>Şube ve Konum Bilgileri</b></td>
                                                        <td><b> : </b></td>
                                                        <td><?php echo $bank_account->branch_name . " (" . $bank_account->branch_code . ") - " . $bank_account->location_city . " / " . $bank_account->location_country ?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr height="30">
                                            <td colspan="6" width="540">
                                                <table style="border-collapse:collapse; text-align:left; width:540px;">
                                                    <tr>
                                                        <td><b>Hesap Bilgileri</b></td>
                                                        <td><b> : </b></td>
                                                        <td><?php echo $bank_account->currency . " / " . $bank_account->account_number . " / " . $bank_account->iban_number; ?></td>
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
                            <td>&nbsp;&nbsp;Kayıtlı Banka Hesabı Bulunmamaktadır.</td>
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