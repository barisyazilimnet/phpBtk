<?php
if (empty($_SESSION["admin_user"])) {
?>
    <form action="index.php?page_code_outside=2" method="POST">
        <table width="500" style="margin: auto; border-collapse:collapse; text-align:left; border:1px solid #000;">
            <tr height="20">
                <td colspan="5">&nbsp;</td>
            </tr>
            <tr height="40">
                <td width="20">&nbsp;</td>
                <td width="150">Kullanıcı Adı</td>
                <td width="50"> : </td>
                <td width="260"><input class="inputs" type="text" name="username"></td>
                <td width="20">&nbsp;</td>
            </tr>
            <tr height="40">
                <td>&nbsp;</td>
                <td>Kullanıcı Şifre</td>
                <td> : </td>
                <td><input class="inputs" type="password" name="password"></td>
                <td>&nbsp;</td>
            </tr>
            <tr height="40">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input class="green_button" type="submit" value="GİRİŞ YAP"></td>
                <td>&nbsp;</td>
            </tr>
            <tr height="20">
                <td colspan="5">&nbsp;</td>
            </tr>
        </table>
    </form>
<?php } ?>