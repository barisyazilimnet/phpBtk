<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="1065" height="100%" style="margin: 0 auto; border-collapse:collapse; vertical-align:top;">
        <tr>
            <td width="300" style="background-color: #001d26; vertical-align:top;">
                <table width="300" style="margin: 0 auto; border-collapse:collapse; vertical-align:top;">
                    <tr height="70" style=" text-align:center;">
                        <td><a href="index.php?page_code_outside=0&page_code_inside=0"><img src="../img/logo.png" alt="logo"></a></td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=101">&nbsp;SİPARİŞLER</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=111">&nbsp;HAVALE BİLDİRİMLERİ</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=89">&nbsp;ÜRÜNLER</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=81">&nbsp;ÜYELER</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=85">&nbsp;YORUMLAR</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=1">&nbsp;SİTE AYARLARI</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=57">&nbsp;MENÜLER</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=9">&nbsp;BANKA HESAP AYARLARI</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=5">&nbsp;SÖZLEŞMELER VE METİNLER</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=21">&nbsp;KARGO AYARLARI</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=33">&nbsp;BANNER AYARLARI</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=45">&nbsp;DESTEK İÇERİKLERİ</a>
                        </td>
                    </tr>
                    <tr height="50">
                        <td style="border-bottom:1px dashed #00c8ff">
                            <a href="index.php?page_code_outside=0&page_code_inside=69">&nbsp;ADMİN ÜYELERİ</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="5" style="background-color: #f00;"></td>
            <td width="760"  style="vertical-align: top;">
                <?php
                if (!$page_code_inside or $page_code_inside == "" or $page_code_inside == 0) {
                    include $page["admin_panel_inside"][0];
                } else {
                    include $page["admin_panel_inside"][$page_code_inside];
                }
                ?>
            </td>
        </tr>
    </table>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>