<?php

require 'Frameworks/PHPMailer/src/Exception.php';
require 'Frameworks/PHPMailer/src/PHPMailer.php';
require 'Frameworks/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST)) {
    $email = security($_POST["email"]);
    $phone_number = security($_POST["phone_number"]);
    if ($email != "" or $phone_number != "") {
        $query = $db_con->prepare("SELECT * FROM users WHERE user_email = ? OR user_phone_number = ?");
        $query->execute([$email, $phone_number]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        if ($query->rowCount()) {
            $mail_content = "Merhaba Sayın " . $user->user_name_surname . "<br /><br />Sitemiz üzerinde bulunan hesabınızın şifresini sıfırlamak için lütfen <a href='" . $settings->website_title . "/index.php?page_code=43&code=" . $user->user_activation_code . "&email=" . $user->user_email . "'>BURAYA TIKLAYINIZ</a><br /><br />Saygılarımızla iyi çalışmalar...<br />" . $settings->website_title;
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            try {
                //? Sunucu ayarları
                $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output //? mail gönderim sırasındaki işlemleri ekrana yazdırır
                //SMTP::DEBUG_OFF = off (for production use)
                //SMTP::DEBUG_CLIENT = client messages
                //SMTP::DEBUG_SERVER = client and server messages
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = decode($settings->website_email_hostname);                     //? web sitenizin (smtp) mail sunucu adresi
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->CharSet   = "UTF-8";                                   //? gönderilen mailin karakter seti tanımlaması
                $mail->Username   = decode($settings->website_email);                     //? web sitenizin mail adresi
                $mail->Password   = decode($settings->website_email_password);                               //? web sitenizin mail adresi şifresi
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
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
                $mail->SMTPOptions = array( //? bazı sunucularda ssl sertifikası dogrulaması istiyor 
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true,
                    ],
                );
                //Recipients
                $mail->setFrom(decode($settings->website_email), decode($settings->website_title)); //? maili kim gönderidigi
                $mail->addAddress(decode($user->user_email), decode($user->user_name_surname));     //? kaç kişiye gönderilmek isteniyorsa tekrarlanabilir -- gönderilecek kişinin adı yazılabilirde yazılmayabilirde
                $mail->addReplyTo(decode($settings->website_email), decode($settings->website_title)); //? gönderilen kişi maili yanıtla dedigi zaman mailin gidicegi yer
                // $mail->addCC('cc@example.com'); //? her hangi bir kişiye bilgi iletmek için
                // $mail->addBCC('bcc@example.com'); //? gizli alanları göndermek için

                //Attachments //? maile dosya eklemek için
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = decode($settings->website_title) . ' Yeni Üyelik Aktivasyonu';
                $mail->msgHTML($content); //? kesinlikle html mail kabul edenler için
                // $mail->Body    = 'Mailin içerigi';
                // $mail->AltBody = 'Mailin içerigi (Html mail kabul etmeyen sunucular için)';

                $mail->send();
                echo 'Mail Gönderildi';
                header("Location:index.php?page_code=36");
            } catch (Exception $e) {
                header("Location:index.php?page_code=33");
            }
        } else {
            header("Location:index.php?page_code=42");
        }
    } else {
        header("Location:index.php?page_code=41");
    }
}
