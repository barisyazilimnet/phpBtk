<?php
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo $mysqli->connect_error . "<br />";
    die("veritabanına baglanılamadı");
}
$mysqli->set_charset("UTF8");
$query = $mysqli->query("SELECT * FROM php_btk.surveys")->fetch_object();
$answer_one_percent_value = number_format(($query->choose_number_one / $query->total_choose_number) * 100, 2, ".", "");
$answer_two_percent_value = number_format(($query->choose_number_two / $query->total_choose_number) * 100, 2, ".", "");
$answer_three_percent_value = number_format(($query->choose_number_three / $query->total_choose_number) * 100, 2, ".", "");
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
    <table style="margin:0 auto;">
        <tr>
            <td colspan="2"><?php echo $query->survey_question; ?></td>
        </tr>
        <tr>
            <td>%&nbsp;<?php echo $answer_one_percent_value ?>&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $query->answer_one; ?></td>
        </tr>
        <tr>
            <td>%&nbsp;<?php echo $answer_two_percent_value ?>&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $query->answer_two; ?></td>
        </tr>
        <tr>
            <td>%&nbsp;<?php echo $answer_three_percent_value ?>&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $query->answer_three; ?></td>
        </tr>
    </table>
</body>

</html>