<?php if (isset($_SESSION["user"])) { ?>
    <table style="width: 1065px; margin: 0 auto;">
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <table style="width: 1065px; margin: 0 auto;">
                    <tr>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=50" style="color:#000; font-weight:bold;">Üyelik Bilgiler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=58" style="color:#000; font-weight:bold;">Adresler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=59" style="color:#000; font-weight:bold;">Favoriler</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=60" style="color:#000; font-weight:bold;">Yorumlar</a></td>
                        <td width="10">&nbsp;</td>
                        <td style="border: 1px solid black; text-align:center; padding:10px 0; width: 203px;"><a href="index.php?page_code=61" style="color:#000; font-weight:bold;">Şiparişler</a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
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
                    <tr height="30">
                        <td style="vertical-align:bottom; font-weight:bold;">İsim Soyisim</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><?php echo $user->user_name_surname ?></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom; font-weight:bold;">Email Adresi</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><?php echo $user->user_email; ?></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom; font-weight:bold;">Telefon Numarası</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><?php echo $user->user_phone_number ?></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom; font-weight:bold;">Cinsiyet</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><?php echo ($user->user_gender) ? "Erkek" : "Kadın"; ?></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom; font-weight:bold;">Kayıt Tarihi</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><?php echo date("d.m.Y H:i:s", $user->user_registration_date); ?></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom; font-weight:bold;">Kayıtlı IP Adresi</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><?php echo $user->user_ip; ?></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><a class="my_account_membership_information_update" href="index.php?page_code=51">Bilgilerimi Güncelle</a></td>
                    </tr>
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
    echo header("Location: index.php");
} ?>