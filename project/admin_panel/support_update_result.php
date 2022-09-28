<?php
if (isset($_SESSION["admin_user"])) {
    $SSS_id = $_GET["SSS_id"];
    if ($_POST) {
        $question = security($_POST["question"]);
        $answer = security($_POST["answer"]);
        $query = $db_con->prepare("UPDATE SSS SET SSS_question=?, SSS_answer=? WHERE SSS_id=?");
        $query->execute([$question, $answer, $SSS_id]);
        header("Location:index.php?page_code_outside=0&page_code_inside=52");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=53");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
