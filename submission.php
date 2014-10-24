<?php
set_include_path ('phpmailer');
require 'PHPMailerAutoload.php';

error_reporting(E_ALL);
ini_set('display_errors',1);

$iconName = $_POST['icon-name'];
$name = $_POST['name'];
$email = $_POST['email'];
$url = $_POST['url'];
$tags = $_POST['tags'];
$message =
$iconName . " submitted by " . "<a href='" . $url . "'>" . $name . "</a><br/><br/>

Here are the submission details:<br/><br/>
<b>Icon Name:</b> " . $iconName . "<br/>
<b>Author Name:</b> " . $name . "<br/>
<b>Email:</b> " . $email . "<br/>
<b>URL:</b> " . $url . "<br/>
<b>Tags:</b> " . $tags . "<br/><br/>

Attachment is included below.";


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               				// Enable verbose debug output

$mail->isSMTP();                                      				// Set mailer to use SMTP
$mail->Host = 'smtp.zoho.com';  									// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               				// Enable SMTP authentication
$mail->Username = '';              									// SMTP username
$mail->Password = '';                        						// SMTP password
$mail->SMTPSecure = 'ssl';                            				// Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    				// TCP port to connect to

$mail->From = $email;
$mail->FromName = $name;
$mail->addAddress('', '');     										// Add a recipient

$mail->WordWrap = 50;                                 				// Set word wrap to 50 characters
if (isset($_FILES['icon-file']) &&
    $_FILES['icon-file']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['icon-file']['tmp_name'],
                         $_FILES['icon-file']['name']);
}
$mail->isHTML(true);                                  				// Set email format to HTML

$mail->Subject = 'Icon Yard Submission';
$mail->Body    = $message;

if(!$mail->send()) {
    header('Location: /sorry');
} else {
    header('Location: /thanks');
}

?>