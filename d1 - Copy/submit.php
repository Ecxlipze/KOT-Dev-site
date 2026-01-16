<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
header('Content-Type: application/json');

$response = ["status" => "error", "message" => "Something went wrong!"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST['fullname'] ?? '';
    $email    = $_POST['email'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $website  = $_POST['website'] ?? '';
    $company  = $_POST['Company'] ?? '';
    $message  = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hammadsyed1999@gmail.com'; 
        $mail->Password   = '';          
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587; 

        $mail->setFrom('hammadsyed1999@gmail.com', 'Impact wave Website');
        $mail->addAddress('hammadsyed1999@gmail.com', 'Admin'); // Admin email address

      

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h3>New Message from Website</h3>
            <p><b>Name:</b> $fullname</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Website:</b> $website</p>
            <p><b>Company:</b> $company</p>
            <p><b>Message:</b><br>$message</p>
        ";

        $mail->send();

        $response = ["status" => "success", "message" => "Message sent successfully!"];
    } catch (Exception $e) {
        $response = ["status" => "error", "message" => "Mailer Error: {$mail->ErrorInfo}"];
    }
}

echo json_encode($response);
?>
