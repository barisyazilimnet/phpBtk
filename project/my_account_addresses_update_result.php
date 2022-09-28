<?php
if (isset($_SESSION["user"])) {
    $id = security($_GET["id"]);
    $name_surname = security($_POST["name_surname"]);
    $address = security($_POST["address"]);
    $country = security($_POST["country"]);
    $province = security($_POST["province"]);
    $district = security($_POST["district"]);
    $phone_number = security($_POST["phone_number"]);
    if (($address != "") and ($country != "") and ($province != "") and ($name_surname != "") and ($phone_number != "") and ($district != "")) {
        $query        =    $db_con->prepare("UPDATE addresses SET user_id = ?, name_surname = ?, address = ?, country = ?, province = ?, district = ?, phone_number = ? WHERE address_id = ?");
        $query->execute([$user->user_id, $name_surname, $address, $country, $province, $district, $phone_number, $id]);

        print_r($query->errorInfo());
        if ($query->rowCount()) {
            header("Location:index.php?page_code=64");
            exit();
        } else {
            header("Location:index.php?page_code=65");
        }
    } else {
        header("Location:index.php?page_code=66");
    }
} else {
    header("Location:index.php");
    exit();
}
