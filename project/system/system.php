<?php
require "settings.php";
$ip_address = $_SERVER["REMOTE_ADDR"];
$time = time();
$date = date("d.m.Y H:i:s", $time);

function security($param)
{
    return htmlspecialchars(strip_tags(trim($param)), ENT_QUOTES);
}

function decode($param)
{
    return htmlspecialchars_decode($param, ENT_QUOTES);
}

function activation_code()
{
    return rand(10000, 99999) . "-" . rand(10000, 99999) . "-" . rand(10000, 99999);
}

$query = $db_con->prepare("SELECT * FROM contracts_and_texts");
$query->execute();
$contracts_and_texts = $query->fetch(PDO::FETCH_OBJ);

if (isset($_SESSION["user"])) {
    $query = $db_con->prepare("SELECT * FROM users WHERE user_email = ?");
    $query->execute([$_SESSION["user"]]);
    $user = $query->fetch(PDO::FETCH_OBJ);
}

$page[0] = "homepage.php";
$page[1] = "about_us.php";
$page[2] = "contracts/membership_contract.php";
$page[3] = "contracts/terms_of_use.php";
$page[4] = "contracts/privacy_contract.php";
$page[5] = "contracts/distance_selling_contract.php";
$page[6] = "contracts/delivery.php";
$page[7] = "contracts/cancel_and_return_and_change.php";
$page[8] = "bank_accounts.php";
$page[9] = "payment_notification_form.php";
$page[10] = "payment_notification_form_result.php";
$page[11] = "payment_notification_form_OK.php";
$page[12] = "payment_notification_form_ERROR.php";
$page[13] = "payment_notification_form_MISSING_AREA.php";
$page[14] = "where_is_my_cargo.php";
$page[15] = "contact.php";
$page[16] = "contact_result.php";
$page[17] = "contact_OK.php";
$page[18] = "contact_ERROR.php";
$page[19] = "contact_MISSING_AREA.php";
$page[20] = "SSS.php";
$page[21] = "sign_up.php";
$page[22] = "sign_up_result.php";
$page[23] = "sign_up_OK.php";
$page[24] = "sign_up_ERROR.php";
$page[25] = "sign_up_MISSING_AREA.php";
$page[26] = "sign_up_REPEATED_INFORMATION.php";
$page[27] = "sign_up_ERROR_PASSWORD.php";
$page[28] = "sign_up_ERROR_CONTRACT.php";
$page[29] = "sign_up_ACTIVATION_OK.php";
$page[30] = "sign_in.php";
$page[31] = "sign_in_result.php";
$page[32] = "sign_in_OK.php";
$page[33] = "sign_in_ERROR.php";
$page[34] = "sign_in_MISSING_AREA.php";
$page[35] = "sign_in_ERROR_INFORMATION.php";
$page[36] = "sign_in_NOT_ACTIVATION.php";
$page[37] = "forgot_password.php";
$page[38] = "forgot_password_result.php";
$page[39] = "forgot_password_OK.php";
$page[40] = "forgot_password_ERROR.php";
$page[41] = "forgot_password_MISSING_AREA.php";
$page[42] = "forgot_password_ERROR_INFORMATION.php";
$page[43] = "create_new_password.php";
$page[44] = "create_new_password_result.php";
$page[45] = "create_new_password_OK.php";
$page[46] = "create_new_password_ERROR.php";
$page[47] = "create_new_password_ERROR_PASSWORD.php";
$page[48] = "create_new_password_MISSING_AREA.php";
$page[49] = "sign_out.php";
$page[50] = "my_account_membership_information.php";
$page[51] = "my_account_membership_information_update.php";
$page[52] = "my_account_membership_information_update_result.php";
$page[53] = "my_account_membership_information_update_OK.php";
$page[54] = "my_account_membership_information_update_ERROR.php";
$page[55] = "my_account_membership_information_update_MISSING_AREA.php";
$page[56] = "my_account_membership_information_update_REPEATED_INFORMATION.php";
$page[57] = "my_account_membership_information_update_ERROR_PASSWORD.php";
$page[58] = "my_account_addresses.php";
$page[59] = "my_account_fovarites.php";
$page[60] = "my_account_comments.php";
$page[61] = "my_account_orders.php";
$page[59] = "my_account_favorites.php";
$page[60] = "my_account_comments.php";
$page[61] = "my_account_orders.php";
$page[62] = "my_account_addresses_update.php";
$page[63] = "my_account_addresses_update_result.php";
$page[64] = "my_account_addresses_update_OK.php";
$page[65] = "my_account_addresses_update_ERROR.php";
$page[66] = "my_account_addresses_update_MISSING_AREA.php";
$page[67] = "my_account_addresses_delete.php";
$page[68] = "my_account_addresses_delete_OK.php";
$page[69] = "my_account_addresses_delete_ERROR.php";
$page[70] = "my_account_addresses_add.php";
$page[71] = "my_account_addresses_add_result.php";
$page[72] = "my_account_addresses_add_OK.php";
$page[73] = "my_account_addresses_add_ERROR.php";
$page[74] = "my_account_addresses_add_MISSING_AREA.php";
$page[75] = "my_account_orders_add_comment.php";
$page[76] = "my_account_orders_add_comment_result.php";
$page[77] = "my_account_orders_add_comment_OK.php";
$page[78] = "my_account_orders_add_comment_ERROR.php";
$page[79] = "my_account_orders_add_comment_MISSING_AREA.php";
$page[80] = "my_account_favorites_delete.php";
$page[81] = "my_account_favorites_delete_ERROR.php";
$page[82] = "product_detail.php";    
$page[83] = "man_shoes.php";
$page[84] = "woman_shoes.php";
$page[85] = "child_shoes.php";
$page[86] = "my_favorite_add.php";
$page[87] = "my_favorite_add_OK.php";
$page[88] = "my_favorite_add_ERROR.php";
$page[89] = "my_favorite_add_REPEATED_INFORMATION.php";
$page[90] = "add_to_cart.php";
$page[91] = "add_to_cart_ERROR.php";
$page[92] = "add_to_cart_NOT_LOGIN.php";
$page[93] = "cart.php";
$page[94] = "cart_delete_product.php";
$page[95] = "cart_decrease_product_qunatity.php";
$page[96] = "cart_increase_product_qunatity.php";
$page[97] = "cart_choose_address_and_shipping_selection.php";
$page[98] = "cart_choose_payment_selection.php";
$page[99] = "cart_choose_payment_selection_result.php";
    