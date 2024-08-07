<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*

// Load PHPMailer autoload file
require 'vendor/autoload.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specify main SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'mihirjobs218@gmail.com';  // SMTP username
    $mail->Password = '';  // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    // Recipients (you can remove addAddress to send from the configured sender address)
    $mail->setFrom('your_email@example.com', 'Your Name');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Message from Portfolio Contact Form';
    $mail->Body    = "Name: $name<br>Email: $email<br>Message: $message";

    $mail->send();  
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

 */