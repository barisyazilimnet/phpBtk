<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //? Sunucu ayarları
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output //? mail gönderim sırasındaki işlemleri ekrana yazdırır
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.barisyazilim.net';                     //? web sitenizin (smtp) mail sunucu adresi
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->CharSet   = "UTF-8";                                   //? gönderilen mailin karakter seti tanımlaması
    $mail->Username   = 'info@barisyazilim.net';                     //? web sitenizin mail adresi
    $mail->Password   = '123456';                               //? web sitenizin mail adresi şifresi
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    // $mail->SMTPOptions = array( //? bazı sunucularda ssl sertifikası dogrulaması istiyor 
    //     'ssl' => [
    //         'verify_peer' => true,
    //         'verify_depth' => 3,
    //         'allow_self_signed' => true,
    //         'peer_name' => 'smtp.example.com',
    //         'cafile' => '/etc/ssl/ca_cert.pem',
    //     ],
    // );
    //? ssl sertifikası olmayan domainler için
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPOptions = array( //? bazı sunucularda ssl sertifikası dogrulaması istiyor 
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    );
    //Recipients
    $mail->setFrom('info@barisyazilim.net', 'Barış Yazılım'); //? maili kim gönderidigi
    $mail->addAddress('kurt-bar07@hotmail.com', 'Barış KURT');     //? kaç kişiye gönderilmek isteniyorsa tekrarlanabilir -- gönderilecek kişinin adı yazılabilirde yazılmayabilirde
    $mail->addReplyTo('info@barisyazilim.net', 'Barış Yazılım'); //? gönderilen kişi maili yanıtla dedigi zaman mailin gidicegi yer
    // $mail->addCC('cc@example.com'); //? her hangi bir kişiye bilgi iletmek için
    // $mail->addBCC('bcc@example.com'); //? gizli alanları göndermek için

    //Attachments //? maile dosya eklemek için
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mailin konusu';
    $mail->msgHTML('Mailin içerigi'); //? kesinlikle html mail kabul edenler için
    // $mail->Body    = 'Mailin içerigi';
    // $mail->AltBody = 'Mailin içerigi (Html mail kabul etmeyen sunucular için)';

    $mail->send();
    echo 'Mail Gönderildi';
} catch (Exception $e) {
    echo "Mail gönderilemedi. Hata açıklaması: {$mail->ErrorInfo}";
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barış Yazılım</title>
</head>

<body>
    <form action="" method="post">
        <table style="margin:0 auto;">
            <tr>
                <td>Adınız :</td>
                <td><input type="text" name="name_surname"></td>
            </tr>
            <tr>
                <td>Telefon Numarası :</td>
                <td><input type="tel" name="phone_number"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Konu :</td>
                <td><input type="text" name="subject"></td>
            </tr>
            <tr>
                <td>Mesaj :</td>
                <td><textarea name="message" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Gönder"></td>
            </tr>
        </table>
    </form>
</body>

</html>