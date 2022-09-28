<?php
if (isset($_SESSION["admin_user"])) {
?>
    <form action="index.php?page_code_outside=0&page_code_inside=23" method="post" enctype="multipart/form-data">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;KARGO FİRMASI AYARLARI</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td>KARGO FİRMA LOGOSU</td>
                            <td> : </td>
                            <td><input type="file" name="shipping_company_logo"></td>
                        </tr>
                        <tr height="40">
                            <td width="230">KARGO FİRMASI ADI</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="shipping_company_name" class="inputs"></td>
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