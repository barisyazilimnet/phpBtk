<?php

use Verot\Upload\Upload;

if (isset($_SESSION["admin_user"])) {
    if ($_POST) {
        $about_us_text = security($_POST["about_us_text"]);
        $membership_contract_text = security($_POST["membership_contract_text"]);
        $terms_of_use_text = security($_POST["terms_of_use_text"]);
        $privacy_contract_text = security($_POST["privacy_contract_text"]);
        $distance_selling_contract_text = security($_POST["distance_selling_contract_text"]);
        $delivery_text = security($_POST["delivery_text"]);
        $cancel_and_return_and_change_text = security($_POST["cancel_and_return_and_change_text"]);
        $query = $db_con->prepare("UPDATE contracts_and_texts SET about_us_text=?, membership_contract_text=?, terms_of_use_text=?, privacy_contract_text=?, distance_selling_contract_text=?, delivery_text=?, cancel_and_return_and_change_text=?");
        $query->execute([$about_us_text, $membership_contract_text, $terms_of_use_text, $privacy_contract_text, $distance_selling_contract_text, $delivery_text, $cancel_and_return_and_change_text]);
        header("Location:index.php?page_code_outside=0&page_code_inside=7");
    } else {
        header("Location:index.php?page_code_outside=0&page_code_inside=8");
    }
} else {
    header("Location:index.php?page_code_outside=1");
}
