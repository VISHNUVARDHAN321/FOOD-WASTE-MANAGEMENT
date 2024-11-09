<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'e:\xampp\htdocs\vendor\autoload.php';
require 'e:\xampp\htdocs\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'e:\xampp\htdocs\vendor\phpmailer\phpmailer\src\Exception.php';
require 'e:\xampp\htdocs\vendor\phpmailer\phpmailer\src\SMTP.php';

$mail = new PHPMailer(true); 

$name = $_POST['name'];
$place=$_POST['place'];
$food=$_POST['food'];
$quantity=$_POST['quantity'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$itemid=$_POST['itemid'];
$imgname=$_POST['imgname'];

try {


    $mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'gvtejeshred1@gmail.com';
$mail->Password = 'myewhwvfzgwmkutk'; // Replace with your actual Gmail password
$mail->SMTPSecure = 'tls'; // Use TLS instead of SSL
$mail->Port = 587; // Port 587 for TLS

 

    $mail->setFrom($email,$name);
    $mail->addAddress("vishnu2003bunny@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = "NGO REQUSET";
    $mail->Body = "<p>Name: {$name}</p> <p>\n\nEmail: $email </p>\n<p>\n\nPhone: $phone </p>\n<p>\n\nPlace: $place</p>\n<p>\n\nFood: $food</p>\n<p>\n\nQuantity: $quantity</p>\n<p>\n\nItemid: $itemid </p>\n<p>\n\nImagename: $imgname ";

    $mail->send();
    echo 'Email has been sent successfully.';
} catch (Exception $e) {
    echo $e;
}
?>