<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../Plugins/PHPMailer/vendor/autoload.php';



class SendMail {
    public function sendMail($conf, $username, $email) {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = $conf['smtp_host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $conf['smtp_user'];
            $mail->Password   = $conf['smtp_pass'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = $conf['smtp_port'];

            $mail->setFrom($conf['smtp_user'], 'GYM');
            $mail->addAddress($email, $username);

            $mail->isHTML(true);
            $mail->Subject = 'Welcome to GYM '.$username;
            $mail->Body    = 'Hi '.$username.',<br>Thank you for signing up at GYM.';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
