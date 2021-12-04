<?php
if(isset($_POST)){
    $name_surname = security($_POST["name_surname"]);
    $email = security($_POST["email"]);
    $phone_number = security($_POST["phone_number"]);
    $bank_id = security($_POST["bank_id"]);
    $description = security($_POST["description"]);
    if($name_surname != "" and $email != "" and $phone_number != ""){
        $query = $db_con->prepare("INSERT INTO payment_notifications SET bank_id=?, payment_notification_name_surname=?, payment_notification_email=?, payment_notification_phone_number=?, payment_notification_description=?, payment_notification_date=?");
        $query->execute([$bank_id, $name_surname, $email, $phone_number, $description, $time]);
        if($query->rowCount()){
            header("Location:index.php?page_code=11");
        }else{
            header("Location:index.php?page_code=12");
        }
    }else{
        header("Location:index.php?page_code=13");
    }
}
