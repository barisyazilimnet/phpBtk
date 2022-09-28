<?php
if (isset($_SESSION["admin_user"])) {
?>
    <form action="index.php?page_code_outside=0&page_code_inside=2" method="post" enctype="multipart/form-data">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;SİTE AYARLARI</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td width="230">SİTE ADI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="website_title" value="<?php echo $settings->website_title; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE AÇIKLAMA</td>
                            <td> : </td>
                            <td><input type="text" name="website_description" value="<?php echo $settings->website_description; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE ANAHTAR KELİMELER</td>
                            <td> : </td>
                            <td><input type="text" name="website_keywords" value="<?php echo $settings->website_keywords; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE COPYRIGHT</td>
                            <td> : </td>
                            <td><input type="text" name="website_copyright" value="<?php echo $settings->website_copyright; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE LOGOSU</td>
                            <td> : </td>
                            <td><input type="file" name="website_logo"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE EMAİL ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_email" value="<?php echo $settings->website_email; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE EMAİL ŞİFRESİ</td>
                            <td> : </td>
                            <td><input type="password" name="website_email_password" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE EMAİL HOST ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_host_name" value="<?php echo $settings->website_host_name; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE FACEBOOK ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_facebook" value="<?php echo $settings->website_host_name; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE TWİTTER ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_twitter" value="<?php echo $settings->website_twitter; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE INSTAGRAM ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_instagram" value="<?php echo $settings->website_instagram; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE PİNTEREST ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_pinterest" value="<?php echo $settings->website_pinterest; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE LİNKEDİN ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_linkedin" value="<?php echo $settings->website_linkedin; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SİTE YOUTUBE ADRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="website_youtube" value="<?php echo $settings->website_youtube; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>DOLAR KURU</td>
                            <td> : </td>
                            <td><input type="text" name="usd" value="<?php echo $settings->usd; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>EURO KURU</td>
                            <td> : </td>
                            <td><input type="text" name="eur" value="<?php echo $settings->eur; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SANAL POS CLIENTID</td>
                            <td> : </td>
                            <td><input type="text" name="client_id" value="<?php echo $settings->client_id; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SANAL POS STOREKEY</td>
                            <td> : </td>
                            <td><input type="text" name="store_key" value="<?php echo $settings->store_key; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SANAL POS APİ KULLANICI ADI</td>
                            <td> : </td>
                            <td><input type="text" name="api_user" value="<?php echo $settings->api_user; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>SANAL POS APİ ŞİRESİ</td>
                            <td> : </td>
                            <td><input type="text" name="api_password" value="<?php echo $settings->api_password; ?>" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td colspan="3" style="text-align: right; padding-right: 3%;"><input type="submit" value="Güncelle" class="green_button"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>