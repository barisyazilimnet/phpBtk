<?php
// $query = $mysqli->prepare("SELECT * FROM php_btk.users");
// $query->execute();
// $query->bind_result($id, $name_surname, $user_name, $password, $email, $birthday, $approval_status, $registration_date);
// while($query->fetch()){
//     echo $id . "<br />",
//          $name_surname . "<br />",
//          $user_name . "<br />",
//          $password . "<br />",
//          $email . "<br />",
//          $birthday . "<br />",
//          $approval_status . "<br />",
//          $registration_date . "<br /><br />";
// }

// $query = $mysqli->prepare("SELECT * FROM php_btk.users WHERE user_id>=?");
// $id = 2;
// $query->bind_param("i", $id); //? i-> int, s-> string, d-> double, b-> blob
// $query->execute();
// $query->bind_result($id, $name_surname, $user_name, $password, $email, $birthday, $approval_status, $registration_date);
// while ($query->fetch()) {
//     echo $id . "<br />",
//     $name_surname . "<br />",
//     $user_name . "<br />",
//     $password . "<br />",
//     $email . "<br />",
//     $birthday . "<br />",
//     $approval_status . "<br />",
//     $registration_date . "<br /><br />";
// }

// $query = $mysqli->prepare("SELECT * FROM php_btk.users WHERE user_id>=? AND user_id<=?");
// $id = 2;
// $id_1 = 3;
// $query->bind_param("ii", $id, $id_1); //? i-> int, s-> string, d-> double, b-> blob
// $query->execute();
// $query->bind_result($id, $name_surname, $user_name, $password, $email, $birthday, $approval_status, $registration_date);
// while ($query->fetch()) {
//     echo $id . "<br />",
//     $name_surname . "<br />",
//     $user_name . "<br />",
//     $password . "<br />",
//     $email . "<br />",
//     $birthday . "<br />",
//     $approval_status . "<br />",
//     $registration_date . "<br /><br />";
// }

// $query = $mysqli->prepare("INSERT INTO php_btk.users (user_name, user_name_surname, user_password, user_email, user_birthday, user_approval_status) VALUES ('Mehmet KURT5', 'mekurt07', '123456', 'mekurt07@gmail.com5', '1960-02-20', '1')");
// $query->execute();