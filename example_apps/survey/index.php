<?php
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo $mysqli->connect_error . "<br />";
    die("veritabanına baglanılamadı");
}
$mysqli->set_charset("UTF8");

$ip_address = $_SERVER["REMOTE_ADDR"];
$time = time();
$turn_back_time = $time - 86400;

if (@$_GET["survey"]) {
    $query = $mysqli->query("SELECT COUNT(*) AS use_vote_number FROM php_btk.survey_vote_users WHERE ip_address = '$ip_address' AND survey_vote_date >= $turn_back_time")->fetch_object();
    if ($query->use_vote_number) {
        echo "Daha önce oy kullanmışsınız";
    }else{
        switch ($_GET["answer"]) {
            case 'one':
                $mysqli->query("UPDATE php_btk.surveys SET choose_number_one = choose_number_one + 1, total_choose_number = total_choose_number + 1");
                break;
            case 'two':
                $mysqli->query("UPDATE php_btk.surveys SET choose_number_two = choose_number_two + 1, total_choose_number = total_choose_number + 1");
                break;
            case 'three':
                $mysqli->query("UPDATE php_btk.surveys SET choose_number_three = choose_number_three + 1, total_choose_number = total_choose_number + 1");
                break;
            default:
                echo "Cevap bulunamadı";
                break;
        }
        $mysqli->query("INSERT INTO php_btk.survey_vote_users (ip_address, survey_vote_date) VALUES ('$ip_address', $time)");
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
    <table style="margin:0 auto;">
        <form action="" method="get">
            <?php
            $query = $mysqli->query("SELECT * FROM php_btk.surveys LIMIT 1")->fetch_object();
            ?>
            <tr>
                <td colspan="2"><?php echo $query->survey_question; ?></td>
            </tr>
            <tr>
                <td><input type="radio" name="answer" value="one"><?php echo $query->answer_one; ?></td>
            </tr>
            <tr>
                <td><input type="radio" name="answer" value="two"><?php echo $query->answer_two; ?></td>
            </tr>
            <tr>
                <td><input type="radio" name="answer" value="three"><?php echo $query->answer_three; ?></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Gönder" name="survey"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;"><a href="results.php">Anket sonuçlarını göster</a></td>
            </tr>
        </form>
    </table>
</body>

</html>