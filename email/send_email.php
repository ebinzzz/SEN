<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

include_once("class.phpmailer.php");
include_once("class.smtp.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Test input values
  $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    $yourEmail = "zorqent@gmail.com";

    // Send to admin
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = 587;
    $mail->Username   = "zorqent@gmail.com";
    $mail->Password   = "uvimcgnfwxdresfv";

    $mail->SetFrom("zorqent@gmail.com", $name); // Gmail requires authenticated sender
    $mail->AddReplyTo($email, $name);
    $mail->AddAddress($yourEmail, "Website Contact");
    $mail->Subject = "New Contact Form: $subject";
    $mail->IsHTML(true);
    $mail->Body = "
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    if (!$mail->Send()) {
        echo json_encode([
            "success" => false,
            "message" => "Mailer Error: " . $mail->ErrorInfo
        ]);
        exit;
    }

    // Auto-reply
    $reply = new PHPMailer();
    $reply->IsSMTP();
    $reply->SMTPAuth   = true;
    $reply->SMTPSecure = "tls";
    $reply->Host       = "smtp.gmail.com";
    $reply->Port       = 587;
    $reply->Username   = "zorqent@gmail.com";
    $reply->Password   = "uvimcgnfwxdresfv";
    $reply->AddReplyTo("support@zorqent.com", "Zorqent Support");
    $reply->AddAddress($email, $name);
    $reply->Subject = "We Received Your Message - Zorqent";
    $reply->IsHTML(true);
   $reply->Body = "
    <div style='font-family:Segoe UI,sans-serif;border:1px solid #eee;padding:20px;max-width:600px;margin:auto;background:#f9f9f9'>
        <img src='http://www.zorqent.wuaze.com/assets/logo.png' alt='Zorqent Logo' style='height:220px;margin-bottom:15px;' />
        <h2 style='color:#5D3FD3'>Thank You for Contacting Zorqent!</h2>
        <p>Hello <strong>$name</strong>,</p>
        <p>We have received your message and our team will get back to you shortly.</p>
        <hr>
        <p><strong>Your Submitted Details:</strong></p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
        <hr>
        <p style='color:#555'>Regards,<br><strong>Zorqent Team</strong><br>📧 support@zorqent.com</p>
    </div>
";


    if (!$reply->Send()) {
        echo json_encode([
            "success" => false,
            "message" => "Auto-reply failed: " . $reply->ErrorInfo
        ]);
        exit;
    }

    echo json_encode([
        "success" => true,
        "message" => "Your message has been sent successfully!"
    ]);
}
?>
