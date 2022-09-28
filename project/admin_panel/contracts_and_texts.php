<?php
if (isset($_SESSION["admin_user"])) {
?>
    <table width="760" style="border-collapse:collapse;  vertical-align:top">
        <tr height="70">
            <td style="background-color:#f90; color:#fff;">
                <h3>&nbsp;SÖZLEŞMELER VE METİNLER</h3>
            </td>
        </tr>
        <tr height="10">
            <td></td>
        </tr>
        <tr>
            <td>
                <table width="750" style="border-collapse:collapse; text-align:left;">
                    <tr>
                        <td width="230">HAKKIMIZDA METNİ</td>
                        <td width="20"> : </td>
                        <td width="500"><textarea class="textareas" name="about_us_text"><?php echo $contracts_and_texts->about_us_text; ?></textarea></td>
                    </tr>
                    <tr>
                        <td width="230">ÜYELİK SÖZLEŞMESİ METNİ</td>
                        <td width="20"> : </td>
                        <td width="500"><textarea class="textareas" name="membership_contract_text"><?php echo $contracts_and_texts->membership_contract_text; ?></textarea></td>
                    </tr>
                    <tr>
                        <td width="230">KULLANIM KOŞULLARI METNİ</td>
                        <td width="20"> : </td>
                        <td width="500"><textarea class="textareas" name="terms_of_use_text"><?php echo $contracts_and_texts->terms_of_use_text; ?></textarea></td>
                    </tr>
                    <tr>
                        <td width="230">GİZLİLİK SÖZLEŞMESİ METNİ</td>
                        <td width="20"> : </td>
                        <td width="500"><textarea class="textareas" name="privacy_contract_text"><?php echo $contracts_and_texts->privacy_contract_text; ?></textarea></td>
                    </tr>
                    <tr>
                        <td width="230">MESAFELİ SATIŞ SÖZLEŞMESİ METNİ</td>
                        <td width="20"> : </td>
                        <td width="500"><textarea class="textareas" name="distance_selling_contract_text"><?php echo $contracts_and_texts->distance_selling_contract_text; ?></textarea></td>
                    </tr>
                    <tr>
                        <td width="230">TESLİMAT METNİ</td>
                        <td width="20"> : </td>
                        <td width="500"><textarea class="textareas" name="delivery_text"><?php echo $contracts_and_texts->delivery_text; ?></textarea></td>
                    </tr>
                    <tr>
                        <td width="230">İPTAL & İADE & DEĞİŞİM METNİ</td>
                        <td width="20"> : </td>
                        <td width="500"><textarea class="textareas" name="cancel_and_return_and_change_text	"><?php echo $contracts_and_texts->cancel_and_return_and_change_text; ?></textarea></td>
                    </tr>
                    <tr height="40">
                        <td colspan="3" style="text-align: right; padding-right: 3%;"><input type="submit" value="Güncelle" class="green_button"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php } else {
    header("Location:index.php?page_code_outside=1");
} ?>