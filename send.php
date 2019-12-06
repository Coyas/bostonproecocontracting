<?php
// Start the session
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
  
}

if(isset($_POST['post'])) {
    print_r($_POST);
    $url = "https://www.google.com/recaptcha/api/siteverify";
	$data = [
        'secret' => "6Lefe8YUAAAAAKwIimCkXj06AZ75xzOmFDO4lnQ8",
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    $options = array(
        'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data)
        )
      );
    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $res = json_decode($response, true);
    // print_r($res);
    if($res['success'] != true) {
        echo 'falhada';
        exit;
    }
}
// die;
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
    // echo "enviando email";
    // echo "<br>" . $to . "<br>";
    // echo $subject . "<br>";
    // echo $message . "<br>";
  
    // echo "enviando email...";

    //Server settings
    // $mail->SMTPDebug  = SMTP::DEBUG_SERVER;                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.bostonecoprocontracting.com';     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@bostonecoprocontracting.com';     // SMTP username
    $mail->Password   = 'boston12pro1eco';                      // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                             // TCP port to connect to

    //Recipients
    $mail->setFrom($to);
    $mail->addAddress($mail->Username, $nome);     // Add a recipient
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
    // echo 'Message has been sent';
    $_SESSION['msg'] = "The email was sent successfully";
    $_SESSION['alert'] = "alert-success";
    $_SESSION['email'] = true;
    
    header("Location: sendmsg.php");
    exit;
} catch (Exception $e) {
    $_SESSION['msg'] = "Message could not be sent. try again later";
    $_SESSION['alert'] = "alert-danger";
    $_SESSION['email'] = false;
    header("Location: sendmsg.php");
    exit;
    //{$mail->ErrorInfo}";
}

?>
