<?php
if (isset($_SESSION["admin_user"])) {
?>
    <form action="index.php?page_code_outside=0&page_code_inside=71" method="post">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;ADMİN ÜYELERİ</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td width="230">KULLANCI ADI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="username" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">ŞİFRE</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="password" name="password" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">İSİM SOYİSİM</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="name_surname" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">E-MAİL ADRESİ</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="email" name="email" class="inputs"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">TELEFON NUMARASI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="tel" name="phone_number" class="inputs" maxlength="11"></td>
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