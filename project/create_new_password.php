<?php
if (isset($_GET["code"])) {
    $email = security($_GET["email"]);
    $activation_code = security($_GET["code"]);
    if ($email != "" and $activation_code != "") {
        $query = $db_con->prepare("SELECT * FROM users WHERE user_email = ? AND user_activation_code = ?");
        $query->execute([$email, $activation_code]);
        if ($query->rowCount()) {
?>
            <table style="width: 1065px; margin: 0 auto;">
                <tr>
                    <td width="500" style="vertical-align: top;">
                        <table style="width: 500px; margin: 0 auto;">
                            <tr style="height: 40px; color:#f90">
                                <td colspan="2">
                                    <h3>Şifre Sıfırlama</h3>
                                </td>
                            </tr>
                            <tr height="30">
                                <td colspan="2" style="border-bottom: 1px dashed #ccc; vertical-align:top;">Aşağıdan Hesabına Giriş Şifreni Değitirebilirsin.</td>
                            </tr>
                            <form action="index.php?page_code=44&email=<?php echo $email; ?>&activation_code=<?php echo $activation_code; ?>" method="post">
                                <tr height="30">
                                    <td colspan="2" style="vertical-align:bottom;">Yeni Şifre (*)</td>
                                </tr>
                                <tr height="30">
                                    <td colspan="2" style="vertical-align:top;"><input class="payment_notification_inputs" type="password" name="password"></td>
                                </tr>
                                <tr height="30">
                                    <td colspan="2" style="vertical-align:bottom;">Yeni Şifre Tekrar (*)</td>
                                </tr>
                                <tr height="30">
                                    <td colspan="2" style="vertical-align:top;"><input class="payment_notification_inputs" type="password" name="password2"></td>
                                </tr>
                                <tr height="40">
                                    <td colspan="2" style="padding: 0 185px;"><input type="submit" value="Şifremi Güncelle" class="green_button"></td>
                                </tr>
                            </form>
                        </table>
                    </td>
                    <td width="20">&nbsp;</td>
                    <td width="545" style="vertical-align: top;">
                        <table style="width: 565px; margin: 0 auto;">
                            <tr style="height: 40px; color:#f90">
                                <td colspan="2">
                                    <h3>Yeni Şifre Oluşturma</h3>
                                </td>
                            </tr>
                            <tr height="30">
                                <td colspan="2" style="border-bottom: 1px dashed #ccc; vertical-align:top;">Çalışma ve İşleyiş Açıklaması.</td>
                            </tr>
                            <tr>
                                <td colspan="2" height="10"></td>
                            </tr>
                            <tr height="30">
                                <td style="text-align: left; width: 30px;"><img src="img/CarklarSiyah20x20.png" alt="CarklarSiyah20x20" style="margin-top: 3px;"></td>
                                <td style="text-align: left;"><b>Bilgi Kontrolü</b></td>
                            </tr>
                            <tr height="30">
                                <td colspan="2">Kullanıcının form alanına girmiş olduğu değer veya değerler veritabanımızda tam detaylı olarak filtrelenerek kontrol edilir.</td>
                            </tr>
                            <tr>
                                <td colspan="2" height="10"></td>
                            </tr>
                            <tr height="30">
                                <td style="text-align: left; width: 30px;"><img src="img/CarklarSiyah20x20.png" alt="CarklarSiyah20x20" style="margin-top: 3px;"></td>
                                <td style="text-align: left;"><b>E-Mail Gönderimi & İçerik</b></td>
                            </tr>
                            <tr height="30">
                                <td colspan="2">Bilgi kontrolü başarılı olur ise, Kullanıcının veritabanımızda kayıtlı olan e-mail adresine yeni şifre oluşturma içerikli bir mail gönderilir.</td>
                            </tr>
                            <tr>
                                <td colspan="2" height="10"></td>
                            </tr>
                            <tr height="30">
                                <td style="text-align: left; width: 30px;"><img src="img/CarklarSiyah20x20.png" alt="CarklarSiyah20x20" style="margin-top: 3px;"></td>
                                <td style="text-align: left;"><b>Şifre Sıfırlama & Oluşturma</b></td>
                            </tr>
                            <tr height="30">
                                <td colspan="2">Kullanıcı, kendisine iletilen mail içerisindeki "Yeni Şifre Oluştur" metnine tıklayacak olur ise, site yeni şifre oluşturma sayfası açılır ve kullancıdan, yeni hesap şifresini oluşturması istenir.</td>
                            </tr>
                            <tr>
                                <td colspan="2" height="10"></td>
                            </tr>
                            <tr height="30">
                                <td style="text-align: left; width: 30px;"><img src="img/CarklarSiyah20x20.png" alt="CarklarSiyah20x20" style="margin-top: 3px;"></td>
                                <td style="text-align: left;"><b>Sonuç</b></td>
                            </tr>
                            <tr height="30">
                                <td colspan="2">Kullanıcı yeni oluşturmuş olduğu hesap şifresi ile siteye giriş yapmaya hazırdır.</td>
                            </tr>
                            <tr>
                                <td colspan="2" height="10"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
<?php
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
}
?>