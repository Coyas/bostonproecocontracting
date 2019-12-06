<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Mimrahe\StripTags\Stripper;
// Load Composer's autoloader
require 'vendor/autoload.php';


$name = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome       = test_input($_POST["fullname"]);
    $to         = test_input($_POST["email"]);
    $subject    = "Hello I'm " . $nome;
    $message    = test_input($_POST["message"]);
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    echo "enviando email";
    echo "<br>" . $to . "<br>";
    echo $subject . "<br>";
    echo $message . "<br>";
  
    echo "enviando email...";

    //Server settings
    $mail->SMTPDebug  = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.googlemail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'adidas.coyas@gmail.com';                     // SMTP username
    $mail->Password   = #TS&coyas#11';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;//587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom("adidas.coyas@gmail.com");
    $mail->addAddress($to, $nome);     // Add a recipient
    // $mail->addAddress('adidas.coyas@gmail.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $stripTags = new Stripper($message);
    $stripedText = $stripTags->strip();

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $stripedText;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>