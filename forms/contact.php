
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Replace with your actual email address and display name
$company_email = 'belajdelmedamine@gmail.com';
$company_name = 'MS recycling';

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // Replace with your SMTP server address
    $mail->SMTPAuth   = true;
    $mail->Username   = 'belajdelmedamine@gmail.com';      // Replace with your SMTP username
    $mail->Password   = 'xtzslxqjzhcnrgti';      // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress($company_email, $company_name);

    // Email content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    if ($mail->send()) {
      // Email sent successfully
      echo 'Message has been sent';}
} catch (Exception $e) {
    // An error occurred while sending the email
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}
?>

