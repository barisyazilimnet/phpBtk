<?php

require 'Frameworks/PHPMailer/src/Exception.php';
require 'Frameworks/PHPMailer/src/PHPMailer.php';
require 'Frameworks/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST)) {
    $name_surname = security($_POST["name_surname"]);
    $email = security($_POST["email"]);
    $phone_number = security($_POST["phone_number"]);
    $message = security($_POST["message"]);
    if ($name_surname != "" and $email != "" and $phone_number != "" and $message != "") {
        $content = "İsim Soyisim : " . $name_surname . "<br />Email Adresi : " . $email . "<br />Telefon Numarası : " . $phone_number . "<br />Mesaj : " . $message;
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
            $mail->addAddress(decode($settings->website_email), decode($settings->website_title));     //? kaç kişiye gönderilmek isteniyorsa tekrarlanabilir -- gönderilecek kişinin adı yazılabilirde yazılmayabilirde
            $mail->addReplyTo($email, $name_surname); //? gönderilen kişi maili yanıtla dedigi zaman mailin gidicegi yer
            // $mail->addCC('cc@example.com'); //? her hangi bir kişiye bilgi iletmek için
            // $mail->addBCC('bcc@example.com'); //? gizli alanları göndermek için

            //Attachments //? maile dosya eklemek için
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = decode($settings->website_title) . ' İletişim Formu Mesajı';
            $mail->msgHTML($content); //? kesinlikle html mail kabul edenler için
            // $mail->Body    = 'Mailin içerigi';
            // $mail->AltBody = 'Mailin içerigi (Html mail kabul etmeyen sunucular için)';

            $mail->send();
            echo 'Mail Gönderildi';
        } catch (Exception $e) {
            echo "Mail gönderilemedi. Hata açıklaması: {$mail->ErrorInfo}";
        }

        $query = $db_con->prepare("INSERT INTO payment_notifications SET bank_id=?, person_name_surname=?, person_email=?, phone_number=?, description=?, date=?");
        $query->execute([$bank_id, $name_surname, $email, $phone_number, $description, $time]);
        if ($query->rowCount()) {
            header("Location:index.php?page_code=17");
        } else {
            header("Location:index.php?page_code=18");
        }
    } else {
        header("Location:index.php?page_code=19");
    }
}
