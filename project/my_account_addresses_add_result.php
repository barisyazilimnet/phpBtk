<?php
if (isset($_SESSION["user"])) {
    $name_surname = security($_POST["name_surname"]);
    $address = security($_POST["address"]);
    $country = security($_POST["country"]);
    $province = security($_POST["province"]);
    $district = security($_POST["district"]);
    $phone_number = security($_POST["phone_number"]);
    if (($address != "") and ($country != "") and ($province != "") and ($name_surname != "") and ($phone_number != "") and ($district != "")) {
        $query        =    $db_con->prepare("INSERT INTO addresses SET user_id = ?, name_surname = ?, address = ?, country = ?, province = ?, district = ?, phone_number = ?");
        $query->execute([$user->user_id, $name_surname, $address, $country, $province, $district, $phone_number]);
        print_r($query->errorInfo());
        if ($query->rowCount()) {
            header("Location:index.php?page_code=72");
            exit();
        } else {
            header("Location:index.php?page_code=73");
        }
    } else {
        header("Location:index.php?page_code=74");
    }
} else {
    header("Location:index.php");
    exit();
}
