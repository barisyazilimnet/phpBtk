<?php
if (isset($_SESSION["admin_user"])) {
?>
    <form action="index.php?page_code_outside=0&page_code_inside=59" method="post">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;MENÜLER</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td width="230">ÜRÜN TÜRÜ</td>
                            <td width="20"> : </td>
                            <td width="500">
                                <select name="product_type" class="selects">
                                    <option value="" selected>LÜTFEN SEÇİNİZ</option>
                                    <option value="Erkek Ayakkkabısı">Erkek Ayakkkabısı</option>
                                    <option value="Kadın Ayakkabısı">Kadın Ayakkabısı</option>
                                    <option value="Çocuk Ayakkabısı">Çocuk Ayakkabısı</option>
                                </select>
                            </td>
                        </tr>
                       <tr height="40">
                            <td width="230">MENÜ ADI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="name" class="inputs"></td>
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