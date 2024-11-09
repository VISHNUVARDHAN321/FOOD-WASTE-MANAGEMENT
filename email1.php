<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

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
    $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
   
    $mail->Username   = 'rajkumarhacker814@gmail.com'; // Your email address
    $mail->Password   = 'hjad noeg oyzc yozm';
    $mail->SMTPAuth   = true;   // Your email password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption
    
    $mail->Port       = 465;  // TCP port to connect to

    //Recipients
    $mail->setFrom('rajkumarhacker814@gmail.com','NGO'); // Your email address and name
    $mail->addAddress('vishnu2003bunny@gmail.com', 'NGO');

    $mail->isHTML(true);
    $mail->Subject = "NGO REQUSET";
    $mail->Body = "<p>Name: {$name}</p> <p>\n\nEmail: $email </p>\n<p>\n\nPhone: $phone </p>\n<p>\n\nPlace: $place</p>\n<p>\n\nFood: $food</p>\n<p>\n\nQuantity: $quantity</p>\n<p>\n\nItemid: $itemid </p>\n<p>\n\nImagename: $imgname ";

    $mail->send();
    echo 'Email has been sent successfully.';
} catch (Exception $e) {
    echo $e;
}
?>