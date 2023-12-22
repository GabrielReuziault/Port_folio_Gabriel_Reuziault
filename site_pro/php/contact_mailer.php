<?php
include_once '/usr/share/php/Symfony/Contracts/Service/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require "/var/www/vendor/phpmailer/phpmailer/src/Exception.php";
require "/var/www/vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "/var/www/vendor/phpmailer/phpmailer/src/SMTP.php";
 
?>
<section id="contact">
    <h1>Contact</h1>
    <form method="post">

        <input type="text" name="to" value="gabriel.reuziault@sts-sio-caen.info">
        <label for="subject">Objet</label>
        <input type="text" name="subject" placeholder="Subject">
        <label for="message">Message</label>
        <textarea name="body"></textarea>
        <div class="g-recaptcha" data-sitekey="6LdKuDgpAAAAACS1sNwzqVPXNplhLU1oMKElmbJQ"></div>
        <button type="submit" name="ok">Envoyer mail</button>
    </form>
<?php
 
if(!empty($_POST)) {
 
    $mail = new PHPMailer(true);
 
    try {
        //Server settings                   //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'gabriel.reuziault@sts-sio-caen.info';             //SMTP username
        $mail->Password = 'Lugabi1407';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
        //Recipients
        $mail->setFrom('gabriel.reuziault@sts-sio-caen.info', 'Mailer');
        $mail->addAddress($_POST['to']??'gabriel.reuziault@sts-sio-caen.info');     //Add a recipient
 
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST['subject']??'Subject';
        $mail->Body = $_POST['body']??'This is the HTML message body <b>in bold!</b>';
 
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    require 'captcha/autoload.php';
    if(isset($_POST['ok'])){
        $recaptcha = new \ReCaptcha\ReCaptcha("6LdKuDgpAAAAAHl1qTzjHrs2AqWDBvyxkQ0G6IyC");

        $gRecaptchaResponse = $_POST['g-recaptcha-response'];

        $resp = $recaptcha->setExpectedHostname('srv1-vm-1143.sts-sio-caen.info')
                  ->verify($gRecaptchaResponse, $remoteIp);

        if ($resp->isSuccess()) {
            echo "Mail envoyer avec succès !";
        } else {
            echo "Captcha non validé !";
        }
    }
}
?>