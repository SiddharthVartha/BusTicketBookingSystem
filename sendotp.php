<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
session_start();
function generateNumericOTP($n) {    
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
    return $result;
}
$n = 4;
$OTP=generateNumericOTP($n);
$_SESSION['otp']=$OTP;
echo $_POST['rs'];
$_SESSION['rs']= $_POST['rs'];
  $conn = new mysqli("localhost", "root", "", "sss");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  echo 'Connected to the database.<br>'; 
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->Debugoutput = 'html';
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'Enter your Username';                // SMTP username
$mail->Password = 'Enter your Password';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('Enter your Username');
$mail->addAddress($_SESSION['mail']);     // Add a recipient
$mail->addReplyTo('Enter your Username');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'OTP';
$mail->Body    = 'This is the OTP from Bus management System <b>'.$OTP.'</b>';
$mail->AltBody = 'This is the OTP from Bus management System for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has ben sent';
}
?>