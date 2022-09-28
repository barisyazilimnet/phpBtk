<table width="1065" style="border-collapse:collapse;">
    <tr style="background-color: #f90; color:#fff; height: 100px;">
        <td>
            <h2>&nbsp;SIK SORULAN SORULAR</h2>
        </td>
    </tr>
    <tr height="50" style="border-bottom: 1px dashed #ccc;">
        <td>&nbsp;Aklınıza takılabileceginizi düşündügümüz soruların cevaplarını bu sayfada cevapladık. Fakat Farklı bir sorunuz varsa lütfen iletişim alanından bizlere iletiniz.</td>
    </tr>
    <tr>
        <td>
            <?php
            $query = $db_con->prepare("SELECT * FROM SSS");
            $query->execute();
            $SSS = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($SSS as $value) {
            ?>
                <div>
                    <div id="<?php echo $value->SSS_id; ?>" class="SSS_question" onclick="$.question_answer_show(<?php echo $value->SSS_id; ?>);"><?php echo $value->SSS_question; ?></div>
                    <div class="SSS_answer" style="display: none;"><?php echo $value->SSS_answer; ?></div>
                </div>
            <?php
            }
            ?>
        </td>
    </tr>
</table>