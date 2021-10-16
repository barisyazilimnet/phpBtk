<?php
//? mysqli_fetch_assoc() -- fetch_assoc()
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users");
// while ($assoc = mysqli_fetch_assoc($query)) {
//     echo "<pre>";
//     print_r($assoc);
//     echo "</pre>";
//     echo "üye id : " . $assoc["user_id"] . "<br />";
//     echo "üye adı : " . $assoc["user_name"] . "<br />";
//     echo "üye kullanıcı adı : " . $assoc["user_name_surname"] . "<br />";
//     echo "üye şifresi : " . $assoc["user_password"] . "<br />";
//     echo "üye email adresi : " . $assoc["user_email"] . "<br />";
//     echo "üye dogum tarihi : " . $assoc["user_birthday"] . "<br />";
//     echo "üye onay durumu : " . $assoc["user_approval_status"] . "<br />";
//     echo "üye kayıt tarihi : " . $assoc["user_registration_date"] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($assoc = $query->fetch_assoc()) {
//     echo "<pre>";
//     print_r($assoc);
//     echo "</pre>";
//     echo "üye id : " . $assoc["user_id"] . "<br />";
//     echo "üye adı : " . $assoc["user_name"] . "<br />";
//     echo "üye kullanıcı adı : " . $assoc["user_name_surname"] . "<br />";
//     echo "üye şifresi : " . $assoc["user_password"] . "<br />";
//     echo "üye email adresi : " . $assoc["user_email"] . "<br />";
//     echo "üye dogum tarihi : " . $assoc["user_birthday"] . "<br />";
//     echo "üye onay durumu : " . $assoc["user_approval_status"] . "<br />";
//     echo "üye kayıt tarihi : " . $assoc["user_registration_date"] . "<br /><br />";
// }

//? mysqli_fetch_row() -- fetch_row()
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users");
// while ($row = mysqli_fetch_row($query)) {
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
//     echo "üye id : " . $row[0] . "<br />";
//     echo "üye adı : " . $row[1] . "<br />";
//     echo "üye kullanıcı adı : " . $row[2] . "<br />";
//     echo "üye şifresi : " . $row[3] . "<br />";
//     echo "üye email adresi : " . $row[4] . "<br />";
//     echo "üye dogum tarihi : " . $row[5] . "<br />";
//     echo "üye onay durumu : " . $row[6] . "<br />";
//     echo "üye kayıt tarihi : " . $row[7] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($row = $query->fetch_row()) {
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
//     echo "üye id : " . $row[0] . "<br />";
//     echo "üye adı : " . $row[1] . "<br />";
//     echo "üye kullanıcı adı : " . $row[2] . "<br />";
//     echo "üye şifresi : " . $row[3] . "<br />";
//     echo "üye email adresi : " . $row[4] . "<br />";
//     echo "üye dogum tarihi : " . $row[5] . "<br />";
//     echo "üye onay durumu : " . $row[6] . "<br />";
//     echo "üye kayıt tarihi : " . $row[7] . "<br /><br />";
// }

//? mysqli_fetch_array() -- fetch_array() -> MYSQLI_ASSOC --- MYSQLI_NUM -- MYSQLI_BOTH
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users");
// while ($array = mysqli_fetch_array($query)) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array[0] . "<br />";
//     echo "üye adı : " . $array[1] . "<br />";
//     echo "üye kullanıcı adı : " . $array[2] . "<br />";
//     echo "üye şifresi : " . $array[3] . "<br />";
//     echo "üye email adresi : " . $array[4] . "<br />";
//     echo "üye dogum tarihi : " . $array[5] . "<br />";
//     echo "üye onay durumu : " . $array[6] . "<br />";
//     echo "üye kayıt tarihi : " . $array[7] . "<br /><br />";
// }
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users");
// while ($array = mysqli_fetch_array($query)) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array["user_id"] . "<br />";
//     echo "üye adı : " . $array["user_name"] . "<br />";
//     echo "üye kullanıcı adı : " . $array["user_name_surname"] . "<br />";
//     echo "üye şifresi : " . $array["user_password"] . "<br />";
//     echo "üye email adresi : " . $array["user_email"] . "<br />";
//     echo "üye dogum tarihi : " . $array["user_birthday"] . "<br />";
//     echo "üye onay durumu : " . $array["user_approval_status"] . "<br />";
//     echo "üye kayıt tarihi : " . $array["user_registration_date"] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($array = $query->fetch_array()) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array[0] . "<br />";
//     echo "üye adı : " . $array[1] . "<br />";
//     echo "üye kullanıcı adı : " . $array[2] . "<br />";
//     echo "üye şifresi : " . $array[3] . "<br />";
//     echo "üye email adresi : " . $array[4] . "<br />";
//     echo "üye dogum tarihi : " . $array[5] . "<br />";
//     echo "üye onay durumu : " . $array[6] . "<br />";
//     echo "üye kayıt tarihi : " . $array[7] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($array = $query->fetch_array()) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array["user_id"] . "<br />";
//     echo "üye adı : " . $array["user_name"] . "<br />";
//     echo "üye kullanıcı adı : " . $array["user_name_surname"] . "<br />";
//     echo "üye şifresi : " . $array["user_password"] . "<br />";
//     echo "üye email adresi : " . $array["user_email"] . "<br />";
//     echo "üye dogum tarihi : " . $array["user_birthday"] . "<br />";
//     echo "üye onay durumu : " . $array["user_approval_status"] . "<br />";
//     echo "üye kayıt tarihi : " . $array["user_registration_date"] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($array = $query->fetch_array(MYSQLI_ASSOC)) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array["user_id"] . "<br />";
//     echo "üye adı : " . $array["user_name"] . "<br />";
//     echo "üye kullanıcı adı : " . $array["user_name_surname"] . "<br />";
//     echo "üye şifresi : " . $array["user_password"] . "<br />";
//     echo "üye email adresi : " . $array["user_email"] . "<br />";
//     echo "üye dogum tarihi : " . $array["user_birthday"] . "<br />";
//     echo "üye onay durumu : " . $array["user_approval_status"] . "<br />";
//     echo "üye kayıt tarihi : " . $array["user_registration_date"] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($array = $query->fetch_array(MYSQLI_NUM)) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array[0] . "<br />";
//     echo "üye adı : " . $array[1] . "<br />";
//     echo "üye kullanıcı adı : " . $array[2] . "<br />";
//     echo "üye şifresi : " . $array[3] . "<br />";
//     echo "üye email adresi : " . $array[4] . "<br />";
//     echo "üye dogum tarihi : " . $array[5] . "<br />";
//     echo "üye onay durumu : " . $array[6] . "<br />";
//     echo "üye kayıt tarihi : " . $array[7] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($array = $query->fetch_array(MYSQLI_BOTH)) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array[0] . "<br />";
//     echo "üye adı : " . $array[1] . "<br />";
//     echo "üye kullanıcı adı : " . $array[2] . "<br />";
//     echo "üye şifresi : " . $array[3] . "<br />";
//     echo "üye email adresi : " . $array[4] . "<br />";
//     echo "üye dogum tarihi : " . $array[5] . "<br />";
//     echo "üye onay durumu : " . $array[6] . "<br />";
//     echo "üye kayıt tarihi : " . $array[7] . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($array = $query->fetch_array(MYSQLI_BOTH)) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
//     echo "üye id : " . $array["user_id"] . "<br />";
//     echo "üye adı : " . $array["user_name"] . "<br />";
//     echo "üye kullanıcı adı : " . $array["user_name_surname"] . "<br />";
//     echo "üye şifresi : " . $array["user_password"] . "<br />";
//     echo "üye email adresi : " . $array["user_email"] . "<br />";
//     echo "üye dogum tarihi : " . $array["user_birthday"] . "<br />";
//     echo "üye onay durumu : " . $array["user_approval_status"] . "<br />";
//     echo "üye kayıt tarihi : " . $array["user_registration_date"] . "<br /><br />";
// }

//? mysqli_fetch_object() -- fetch_object()
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users");
// while ($object = mysqli_fetch_object($query)) {
//     echo "<pre>";
//     print_r($object);
//     echo "</pre>";
//     echo "üye id : " . $object->user_id . "<br />";
//     echo "üye adı : " . $object->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $object->user_name_surname . "<br />";
//     echo "üye şifresi : " . $object->user_password . "<br />";
//     echo "üye email adresi : " . $object->user_email . "<br />";
//     echo "üye dogum tarihi : " . $object->user_birthday . "<br />";
//     echo "üye onay durumu : " . $object->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $object->user_registration_date . "<br /><br />";
// }
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($object = $query->fetch_object()) {
//     echo "<pre>";
//     print_r($object);
//     echo "</pre>";
//     echo "üye id : " . $object->user_id . "<br />";
//     echo "üye adı : " . $object->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $object->user_name_surname . "<br />";
//     echo "üye şifresi : " . $object->user_password . "<br />";
//     echo "üye email adresi : " . $object->user_email . "<br />";
//     echo "üye dogum tarihi : " . $object->user_birthday . "<br />";
//     echo "üye onay durumu : " . $object->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $object->user_registration_date . "<br /><br />";
// }

//? mysqli_free_result() -- free_result() -- free() -- close()
// $query = mysqli_query($db_con, "SELECT * FROM php_btk.users");
// while ($object = mysqli_fetch_object($query)) {
//     echo "<pre>";
//     print_r($object);
//     echo "</pre>";
//     echo "üye id : " . $object->user_id . "<br />";
//     echo "üye adı : " . $object->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $object->user_name_surname . "<br />";
//     echo "üye şifresi : " . $object->user_password . "<br />";
//     echo "üye email adresi : " . $object->user_email . "<br />";
//     echo "üye dogum tarihi : " . $object->user_birthday . "<br />";
//     echo "üye onay durumu : " . $object->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $object->user_registration_date . "<br /><br />";
// }
// mysqli_free_result($query);
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($object = $query->fetch_object()) {
//     echo "<pre>";
//     print_r($object);
//     echo "</pre>";
//     echo "üye id : " . $object->user_id . "<br />";
//     echo "üye adı : " . $object->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $object->user_name_surname . "<br />";
//     echo "üye şifresi : " . $object->user_password . "<br />";
//     echo "üye email adresi : " . $object->user_email . "<br />";
//     echo "üye dogum tarihi : " . $object->user_birthday . "<br />";
//     echo "üye onay durumu : " . $object->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $object->user_registration_date . "<br /><br />";
// }
// $query->free_result();
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($object = $query->fetch_object()) {
//     echo "<pre>";
//     print_r($object);
//     echo "</pre>";
//     echo "üye id : " . $object->user_id . "<br />";
//     echo "üye adı : " . $object->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $object->user_name_surname . "<br />";
//     echo "üye şifresi : " . $object->user_password . "<br />";
//     echo "üye email adresi : " . $object->user_email . "<br />";
//     echo "üye dogum tarihi : " . $object->user_birthday . "<br />";
//     echo "üye onay durumu : " . $object->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $object->user_registration_date . "<br /><br />";
// }
// $query->free();
// $query = $mysqli->query("SELECT * FROM php_btk.users");
// while ($object = $query->fetch_object()) {
//     echo "<pre>";
//     print_r($object);
//     echo "</pre>";
//     echo "üye id : " . $object->user_id . "<br />";
//     echo "üye adı : " . $object->user_name . "<br />";
//     echo "üye kullanıcı adı : " . $object->user_name_surname . "<br />";
//     echo "üye şifresi : " . $object->user_password . "<br />";
//     echo "üye email adresi : " . $object->user_email . "<br />";
//     echo "üye dogum tarihi : " . $object->user_birthday . "<br />";
//     echo "üye onay durumu : " . $object->user_approval_status . "<br />";
//     echo "üye kayıt tarihi : " . $object->user_registration_date . "<br /><br />";
// }
// $query->close();