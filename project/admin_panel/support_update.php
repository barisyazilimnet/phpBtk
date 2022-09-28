<?php
if (isset($_SESSION["admin_user"])) {
    $SSS_id = $_GET["SSS_id"];
    $query = $db_con->prepare("SELECT * FROM SSS WHERE SSS_id=?");
    $query->execute([$SSS_id]);
    $SSS = $query->fetch(PDO::FETCH_OBJ);
?>
    <form action="index.php?page_code_outside=0&page_code_inside=51&SSS_id=<?php echo $SSS_id ?>" method="post">
        <table width="760" style="border-collapse:collapse;">
            <tr height="70">
                <td style="background-color:#f90; color:#fff;">
                    <h3>&nbsp;DESTEK İÇERİKLERİ</h3>
                </td>
            </tr>
            <tr height="10">
                <td></td>
            </tr>
            <tr>
                <td>
                    <table width="750" style="border-collapse:collapse; text-align:left;">
                        <tr height="40">
                            <td width="230">SORU</td>
                            <td width="20"> : </td>
                            <td width="500"><input type="text" name="question" class="inputs" value="<?php echo $SSS->SSS_question ?>"></td>
                        </tr>
                        <tr>
                            <td>CEVAP</td>
                            <td> : </td>
                            <td><textarea name="answer" class="textareas"><?php echo $SSS->SSS_answer ?></textarea></td>
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