<?php
function sendVerificationEmail($email, $token) {
    // Sender and recipient details
    $fromEmail = "touhidul@gmail.com"; // Replace with your email
    $subject = "Email Verification for Teacher Registration";
    $headers = "From: ".$fromEmail;
    
    // Email content
    $message = "
    Hi, 

    Please click the link below to verify your email address and complete the registration:

    <a href='https://yourwebsite.com/verifyEmail.php?email=$email&token=$token'>Verify Email</a>

    If you did not request this, please ignore this email.

    Regards,
    Your Website Team
    ";

    // Send email
    mail($email, $subject, $message, $headers);
}
?>
