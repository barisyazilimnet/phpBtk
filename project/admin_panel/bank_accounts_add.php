<?php
if (isset($_SESSION["admin_user"])) {
?>
    <form action="index.php?page_code_outside=0&page_code_inside=11" method="post" enctype="multipart/form-data">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;BANKA HESAP AYARLARI</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td>BANKA LOGOSU</td>
                            <td> : </td>
                            <td><input type="file" name="bank_logo"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">BANKA ADI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="bank_name" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>BANKA ŞUBE ADI</td>
                            <td> : </td>
                            <td><input type="text" name="bank_branch_name" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>BANKA ŞUBE KODU</td>
                            <td> : </td>
                            <td><input type="text" name="bank_branch_code" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>BANKANIN BULUNDUĞU ŞEHİR</td>
                            <td> : </td>
                            <td><input type="text" name="bank_location_city" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>BANKANIN BULUNDUĞU ÜLKE</td>
                            <td> : </td>
                            <td><input type="text" name="bank_location_country" class="inputs"></td>
                        </tr>

                        <tr height="40">
                            <td>PARA BİRİMİ</td>
                            <td> : </td>
                            <td><input type="text" name="bank_currency" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>HESAP SAHİBİ</td>
                            <td> : </td>
                            <td><input type="text" name="account_holder" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>HESAP NUMARASI</td>
                            <td> : </td>
                            <td><input type="text" name="account_number" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td>IBAN</td>
                            <td> : </td>
                            <td><input type="text" name="iban_number" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td colspan="3" style="text-align: right; padding-right: 3%;"><input type="submit" value="Ekle" class="green_button"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>