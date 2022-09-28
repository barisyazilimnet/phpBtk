<?php
if (isset($_POST["cargo_follow_number"])) {
    $cargo_follow_number = preg_replace("/[^0-9]/", "", security($_POST["cargo_follow_number"]));
    if ($cargo_follow_number != "") {
        header("Location:https://selfservis.yurticikargo.com/reports/SSWDocumentDetail.aspx?DocId=" . $cargo_follow_number);
    }
}
?>
<table width="1065" style="border-collapse:collapse;">
    <tr style="background-color: #f90; color:#fff; height: 100px;">
        <td>
            <h2>&nbsp;KARGOM NEREDE?</h2>
        </td>
    </tr>
    <tr height="50" style="border-bottom: 1px dashed #ccc;">
        <td>&nbsp;Sipariş Gönderilerinizi Bu Ekrandan Takip Edebilirsiniz.</td>
    </tr>
    <tr height="50px">
        <td></td>
    </tr>
    <tr height="100">
        <td style="text-align: center;"><img src="img/Kargocu.png" alt="Kargocu"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr height="50">
        <td style="text-align: center; font-weight:bold">Gönderi Takip Numarası</td>
    </tr>
    <form method="POST">
        <tr>
            <td style="text-align: center;"><input type="text" name="cargo_follow_number" style="width: 75%; height: 30px; padding: 0 10px; text-align:center"></td>
        </tr>
        <tr height="50">
            <td style="text-align: center;"><input type="submit" value="Kargo Durumu Göster" class="cargo_follow_button"></td>
        </tr>
    </form>
</table>