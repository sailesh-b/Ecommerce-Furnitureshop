<?php
include('dbconnect.php');

require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$reply = $_POST['reply'];
$id = $_POST['id'];
$email = $_POST['email'];

$conn->query("UPDATE `contact` SET `Reply`='$reply' WHERE `id`='$id'");

$mail=new PHPMailer(true); // Passing `true` enables exceptions

try {
    //settings
    $mail->SMTPDebug=2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='kidstvminiproject@gmail.com'; // SMTP username
    $mail->Password='tesgtsikebbzjybb'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('support@kidstv.com', 'KidsTv');

    //recipient
    $mail->addAddress($email);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Reply from Basco';
    $mail->Body=$reply;
    $mail->AltBody='There is an error please contact admin';

    $mail->send();

    header('location: contact.php');
}
catch(Exception $e) {
    header('location: error.php');
}

?>