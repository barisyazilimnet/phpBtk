<?php

require 'Frameworks/PHPMailer/src/Exception.php';
require 'Frameworks/PHPMailer/src/PHPMailer.php';
require 'Frameworks/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST)) {
    $email = security($_POST["email"]);
    $password = md5(security($_POST["password"]));
    $password2 = md5(security($_POST["password2"]));
    $name_surname = security($_POST["name_surname"]);
    $phone_number = security($_POST["phone_number"]);
    $gender = security($_POST["gender"]);
    $approval_contract = security($_POST["approval_contract"]);
    $activation_code = activation_code();
    if ($email != "" and $password != "" and $password2 != "" and $name_surname != "" and $phone_number != "") {
        if ($approval_contract) {
            if ($password == $password2) {
                $query = $db_con->prepare("SELECT user_email FROM users WHERE user_email = ?");
                $query->execute([$email]);
                if (!$query->rowCount()) {
                    $query = $db_con->prepare("INSERT INTO users SET user_email=?, user_password=?, user_name_surname=?, user_phone_number=?, user_gender=?, user_registration_date=?, user_ip=?, user_activation_code=?");
                    $query->execute([$email, $password, $name_surname, $phone_number, $gender, $time, $ip_address, $activation_code]);
                    if ($query->rowCount()) {
                        $mail_content = "Merhaba Sayın " . $name_surname . "<br /><br />Sitemizde yapmış olduğunuz üyelik kaydını tamamlamak için lütfen <a href='" . $settings->website_title . "/activation.php?code=" . $activation_code . "&email=" . $email . "'>BURAYA TIKLAYINIZ</a><br /><br />Saygılarımızla iyi çalışmalar...<br />" . $settings->website_title;
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
                            $mail->addAddress(decode($email), decode($name_surname));     //? kaç kişiye gönderilmek isteniyorsa tekrarlanabilir -- gönderilecek kişinin adı yazılabilirde yazılmayabilirde
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
                        } catch (Exception $e) {
                            echo "Mail gönderilemedi. Hata açıklaması: {$mail->ErrorInfo}";
                        }
                        header("Location:index.php?page_code=23");
                    } else {
                        header("Location:index.php?page_code=24");
                    }
                } else {
                    header("Location:index.php?page_code=26");
                }
            } else {
                header("Location:index.php?page_code=27");
            }
        } else {
            header("Location:index.php?page_code=28");
        }
    } else {
        header("Location:index.php?page_code=25");
    }
}
