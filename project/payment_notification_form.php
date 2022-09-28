<table style="width: 1065px; margin: 0 auto;">
    <tr>
        <td width="500" style="vertical-align: top;">
            <table style="width: 500px; margin: 0 auto;">
                <tr style="height: 40px; color:#f90">
                    <td>
                        <h3>Ödeme Bildirim Formu</h3>
                    </td>
                </tr>
                <tr height="30">
                    <td style="border-bottom: 1px dashed #ccc; vertical-align:top;">Tamamlanmış Olan Ödeme İşleminizi Aşağıdaki Formdan İletiniz.</td>
                </tr>
                <form action="index.php?page_code=10" method="post">
                    <tr height="30">
                        <td style="vertical-align:bottom;">İsim Soyisim (*)</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><input class="payment_notification_inputs" type="text" name="name_surname"></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom;">Email Adresi (*)</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><input class="payment_notification_inputs" type="email" name="email"></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom;">Telefon Numarası (*)</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><input class="payment_notification_inputs" type="tel" name="phone_number" maxlength="11"></td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom;">Ödeme Yapılan Banka</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;">
                            <select name="bank_id" class="payment_notification_select">
                                <?php
                                $query = $db_con->prepare("SELECT bank_account_id AS id, bank_name, currency FROM bank_accounts ORDER BY bank_name");
                                $query->execute();
                                $banks = $query->fetchAll(PDO::FETCH_OBJ);
                                foreach ($banks as $value) {
                                    echo "<option value='$value->id'>$value->bank_name - $value->currency</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:bottom;">Açıklama</td>
                    </tr>
                    <tr height="30">
                        <td style="vertical-align:top;"><textarea name="description" class="payment_notification_textarea"></textarea></td>
                    </tr>
                    <tr height="40">
                        <td style="padding: 0 185px;"><input type="submit" value="Formu Gönder" class="green_button"></td>
                    </tr>
                </form>
            </table>
        </td>
        <td width="20">&nbsp;</td>
        <td width="545" style="vertical-align: top;">
            <table style="width: 565px; margin: 0 auto;">
                <tr style="height: 40px; color:#f90">
                    <td colspan="2">
                        <h3>İşleyiş</h3>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" style="border-bottom: 1px dashed #ccc; vertical-align:top;">Havale / EFT İşlemlerinin Kontrolü.</td>
                </tr>
                <tr><td colspan="2" height="10"></td></tr>
                <tr height="30">
                    <td style="text-align: left; width: 30px;"><img src="img/Banka20x20.png" alt="Banka20x20" style="margin-top: 3px;"></td>
                    <td style="text-align: left;"><b>Havale / EFT İşemi</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2">Müşteri tarafından öncelikle banka hesaplarımız sayfasında bulunan herhangi bir hesaba ödeme işlemi gerçekleştirilir.</td>
                </tr>
                <tr><td colspan="2" height="10"></td></tr>
                <tr height="30">
                    <td style="text-align: left; width: 30px;"><img src="img/DokumanKirmiziKalemli20x20.png" alt="DokumanKirmiziKalemli20x20" style="margin-top: 3px;"></td>
                    <td style="text-align: left;"><b>Bildirim İşlemi</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2">Ödeme işleminizi tamamladıktan sonra "Ödeme Bildirim Formu" sayfasından müşteri yapmış olduğu ödeme için bildirim formunu doldurarak online olarak gönderir.</td>
                </tr>
                <tr><td colspan="2" height="10"></td></tr>
                <tr height="30">
                    <td style="text-align: left; width: 30px;"><img src="img/CarklarSiyah20x20.png" alt="CarklarSiyah20x20" style="margin-top: 3px;"></td>
                    <td style="text-align: left;"><b>Kontroller</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2">"Ödeme Bildirim Formu"'nuz tarafımıza ulaştıgı anda ilgili departman tarafından yapmış olduğunuz havale / eft işlemi ilgili banka üzerinden kontrol edilir.</td>
                </tr>
                <tr><td colspan="2" height="10"></td></tr>
                <tr height="30">
                    <td style="text-align: left; width: 30px;"><img src="img/InsanlarSiyah20x20.png" alt="InsanlarSiyah20x20" style="margin-top: 3px;"></td>
                    <td style="text-align: left;"><b>Onay / Red</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2">Ödeme bildirimi geçerli ise yani hesaba ödeme geçmiş ise, yönetici ilgili ödeme onayını vererek, siparişiniz teslimat birimine iletilecektir.</td>
                </tr>
                <tr><td colspan="2" height="10"></td></tr>
                <tr height="30">
                    <td style="text-align: left; width: 30px;"><img src="img/SaatEsnetikGri20x20.png" alt="SaatEsnetikGri20x20" style="margin-top: 3px;"></td>
                    <td style="text-align: left;"><b>Sipariş Hazırlama & Teslimat</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2">Yönetici ödeme onayından sonra sayfamız üzerinden vermiş olduğunuz sipariş en kısa sürede hazırlanarak kargoya teslim edilir ve tarafınıza ulaştırılır.</td>
                </tr>
            </table>
        </td>
    </tr>
</table>