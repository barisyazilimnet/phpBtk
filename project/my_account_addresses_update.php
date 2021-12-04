<?php
if (isset($_SESSION["user"])) {
    $id = security($_GET["id"]);
    $query = $db_con->prepare("SELECT * FROM addresses WHERE address_id = ? AND user_id = ?");
    $query->execute([$id, $user->user_id]);
    $address = $query->fetch(PDO::FETCH_OBJ);

?>
    <table style="width: 1065px; margin: 0 auto;">
        <tr>
            <td width="500" style="vertical-align: top;">
                <table style="width: 500px; margin: 0 auto;">
                    <tr style="height: 40px; color:#f90">
                        <td>
                            <h3>Hesabım > Adresler</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Aşağıdan Yeni Adres Ekleyebilirsin.</td>
                    </tr>
                    <form action="index.php?page_code=63&id=<?php echo $id ?>" method="post">
                        <tr height="30">
                            <td style="vertical-align:bottom;">İsim Soyisim (*)</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="text" name="name_surname" value="<?php echo $address->name_surname ?>"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">Adres (*)</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><textarea class="payment_notification_textarea" name="address"><?php echo $address->address ?></textarea></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">Ülke (*)</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="text" name="country" value="<?php echo $address->country ?>"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">İl (*)</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="text" name="province" value="<?php echo $address->province ?>"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">İlçe (*)</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="text" name="district" value="<?php echo $address->district ?>"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">Telefon Numarası (*)</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="text" name="phone_number" value="<?php echo $address->phone_number ?>"></td>
                        </tr>
                        <tr height="40">
                            <td style="padding: 0 185px;"><input type="submit" value="Güncelle" class="green_button"></td>
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
<?php } else {
    header("Location: index.php");
} ?>