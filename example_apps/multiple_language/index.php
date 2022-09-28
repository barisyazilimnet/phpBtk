<?php
session_start();
if (empty($_SESSION["lang"])) {
    require "langtr.php";
} else {
    if ($_SESSION["lang"] == "tr") {
        require "langtr.php";
    } else {
        require "langen.php";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td><?php echo HOMEPAGE; ?></td>
            <td><?php echo ABOUT_US; ?></td>
            <td><?php echo CONTACT; ?></td>
            <td><?php echo PRODUCTS; ?></td>
            <td><a href="choose.php?lang=tr">TR</a> | <a href="choose.php?lang=en">EN</a></td>
        </tr>
    </table>
</body>

</html>