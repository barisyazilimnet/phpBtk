<?php
if (isset($_SESSION["admin_user"])) {
    if ($_POST) {
        $question = security($_POST["question"]);
        $answer = security($_POST["answer"]);
        $query = $db_con->prepare("INSERT INTO SSS SET SSS_question=?, SSS_answer=?");
        $query->execute([$question, $answer, $SSS_id]);
        header("Location:index.php?page_code_outside=0&page_code_inside=48");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=49");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
