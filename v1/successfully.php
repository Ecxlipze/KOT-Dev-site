<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? 'New Contact Message');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill all required fields.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP config
        $mail->isSMTP();
        $mail->Host       = 'mail.kotenterprises.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'no-reply@kotenterprises.com';
        $mail->Password   = 'tLbb2207^';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->Timeout    = 5;

        // Email settings
        $mail->setFrom('no-reply@kotenterprises.com', 'Website Contact Form');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('no-reply@kotenterprises.com', 'Admin');

        $mail->isHTML(true);
        $mail->Subject = htmlspecialchars($subject);
        $mail->Body = "
            <h3>New Contact Form Submission</h3>
            <p><b>Name:</b> {$name}</p>
            <p><b>Email:</b> {$email}</p>
            <p><b>Subject:</b> {$subject}</p>
            <p><b>Message:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>
        ";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
