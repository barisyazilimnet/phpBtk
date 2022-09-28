<table width="1065" height="100%" style="border-collapse:collapse;">
    <tr style="background-color: #f90; color:#fff; height: 100px;">
        <td>
            <h2>&nbsp;BANKA HESAPLARIMIZ</h2>
        </td>
    </tr>
    <tr height="50" style="border-bottom: 1px dashed #ccc;">
        <td>&nbsp;Ödemeleriniz İçin Çalışmakta Olduğumuz Tüm Banka Hesap Bilgileri Aşağıdadır.</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr style="vertical-align:top;">
        <td>
            <table width="1065" height="100%" style="border-collapse:collapse; vertical-align:top">
                <tr style="vertical-align:top;">
                    <?php
                    $query = $db_con->prepare("SELECT * FROM bank_accounts");
                    $query->execute();
                    $bank_accounts = $query->fetchAll(PDO::FETCH_OBJ);
                    $number = 1;
                    foreach ($bank_accounts as $bank_account) {
                    ?>
                        <td width="348">
                            <table style="border-collapse:collapse; vertical-align:top; border: 1px solid #ccc; margin-bottom: 10px;">
                                <tr height="40">
                                    <td colspan="4" style="padding: 0 38.5px;"><img width="271" height="30" src="img/<?php echo decode($bank_account->bank_logo) ?>" alt="<?php echo $bank_account->bank_logo ?>"></td>
                                </tr>
                                <tr height="25">
                                    <td width="5">&nbsp;</td>
                                    <td width="80"><b>Banka Adı</b></td>
                                    <td width="10"><b>:</b></td>
                                    <td width="253"><?php echo decode($bank_account->bank_name) ?></td>
                                </tr>
                                <tr height="25">
                                    <td width="5">&nbsp;</td>
                                    <td><b>Konum</b></td>
                                    <td><b>:</b></td>
                                    <td><?php echo decode($bank_account->location_city) . " / " . decode($bank_account->location_country) ?></td>
                                </tr>
                                <tr height="25">
                                    <td width="5">&nbsp;</td>
                                    <td><b>Şube</b></td>
                                    <td><b>:</b></td>
                                    <td><?php echo decode($bank_account->branch_name) . " / " . decode($bank_account->branch_code) ?></td>
                                </tr>
                                <tr height="25">
                                    <td width="5">&nbsp;</td>
                                    <td><b>Birim</b></td>
                                    <td><b>:</b></td>
                                    <td><?php echo decode($bank_account->currency) ?></td>
                                </tr>
                                <tr height="25">
                                    <td width="5">&nbsp;</td>
                                    <td><b>Hesap Adı</b></td>
                                    <td><b>:</b></td>
                                    <td><?php echo decode($bank_account->account_holder) ?></td>
                                </tr>
                                <tr height="25">
                                    <td width="5">&nbsp;</td>
                                    <td><b>Hesap No</b></td>
                                    <td><b>:</b></td>
                                    <td><?php echo decode($bank_account->account_number) ?></td>
                                </tr>
                                <tr height="25">
                                    <td width="5">&nbsp;</td>
                                    <td><b>Iban No</b></td>
                                    <td><b>:</b></td>
                                    <td><?php echo decode($bank_account->iban_number) ?></td>
                                </tr>
                            </table>
                        </td>
                        <?php
                        if ($number < 3) {
                            echo "<td width='10'></td>";
                        }
                        $number++;
                        if ($number > 3) {
                            echo "</tr><tr>";
                            $number = 1;
                        }
                    }
                    ?>
                </tr>
            </table>
        </td>
    </tr>
</table>