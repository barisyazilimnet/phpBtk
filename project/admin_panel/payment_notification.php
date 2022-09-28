<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;">
        <tr height="70">
            <td style="background-color:#f90; color:#fff;">
                <h3>&nbsp;HAVALE BİLDİRİMLERİ</h3>
            </td>
        </tr>
        <tr height="10">
            <td></td>
        </tr>
        <?php
        $query = $db_con->prepare("SELECT * FROM payment_notifications");
        $query->execute();
        $payment_notifications = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            foreach ($payment_notifications as $payment_notification) {
                $query = $db_con->prepare("SELECT bank_name FROM bank_accounts WHERE bank_account_id=?");
                $query->execute([$payment_notification->bank_id]);
                $bn = $query->fetch(PDO::FETCH_OBJ);
        ?>
                <tr>
                    <td style="border-bottom:1px dashed #ccc">
                        <table style="border-collapse:collapse; text-align:left; width:750px; margin-left:5px;">
                            <tr style="height:30px;">
                                <td style="text-align: left; font-weight: bold; width:500px;"><?php echo $payment_notification->payment_notification_name_surname ?></td>
                                <td style="text-align: right; width:250px;"><?php echo date("d.m.Y H:i", $payment_notification->payment_notification_date) ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table style="border-collapse:collapse; text-align:left; width:750px;">
                                        <tr>
                                            <td style="text-align: left; width:200px;"><b>Banka : </b><?php echo $bn->bank_name; ?></td>
                                            <td style="text-align: left; width:200px;"><b>Telefon : </b><?php echo $payment_notification->payment_notification_phone_number ?></td>
                                            <td style="text-align: left; width:350px;"><b>Email : </b><?php echo $payment_notification->payment_notification_email ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: left; margin: 5px 0px;"><b>Açıklama : </b><?php echo $payment_notification->payment_notification_description ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right; width:75px;">
                                    <table style="border-collapse:collapse; text-align:right; width:75px;">
                                        <tr height="30">
                                            <td width="40">
                                                <a href="index.php?page_code_outside=0&page_code_inside=112&pn_id=<?php echo $payment_notification->payment_notification_id ?>">
                                                    <img src="../img/Sil20x20.png" alt="Sil20x20" />
                                                </a>
                                            </td>
                                            <td width="25">
                                                <a href="index.php?page_code_outside=0&page_code_inside=112&pn_id=<?php echo $payment_notification->payment_notification_id ?>" style="color:#646464">
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
            <?php
            }
        } else {
            ?>
            <tr>
                <td>
                    <table style="border-collapse:collapse; text-align:left; width:750px;">
                        <tr>
                            <td>&nbsp;&nbsp;Kayıtlı Havale Bildirimi Bulunmamaktadır.</td>
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