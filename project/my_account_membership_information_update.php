<?php if (isset($_SESSION["user"])) { ?>
    <table style="width: 1065px; margin: 0 auto;">
        <tr>
            <td width="500" style="vertical-align: top;">
                <table style="width: 500px; margin: 0 auto;">
                    <tr style="height: 40px; color:#f90">
                        <td>
                            <h3>Hesabım > Üyelik Bilgilerim</h3>
                        </td>
                    </tr>
                    <tr height="30">
                        <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Aşağıdan Üyelik Bilgilerini Güncelleyebilirsin.</td>
                    </tr>
                    <form action="index.php?page_code=52" method="post">
                        <tr height="30">
                            <td style="vertical-align:bottom;">Email Adresi</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="email" name="email" value="<?php echo $user->user_email; ?>"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">Şifre</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="password" name="password" value="EskiSifre"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">Şifre Tekrar</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="password" name="password2" value="EskiSifre"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">İsim Soyisim</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="text" name="name_surname" value="<?php echo $user->user_name_surname; ?>"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">Telefon Numarası</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;"><input class="payment_notification_inputs" type="tel" name="phone_number" maxlength="11" value="<?php echo $user->user_phone_number; ?>"></td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:bottom;">Cinsiyet</td>
                        </tr>
                        <tr height="30">
                            <td style="vertical-align:top;">
                                <select name="gender" id="gender" class="payment_notification_select">
                                    <option value="1" <?php if ($user->user_gender) { echo "selected"; } ?>>Erkek</option>
                                    <option value="0" <?php if (!$user->user_gender) { echo "selected"; } ?>>Kadın</option>
                                </select>
                            </td>
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