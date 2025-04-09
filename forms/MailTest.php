<?php
$to = 'bitye.kidane@gmail.com'; // Change this to the recipient's email
$subject = 'Test Email';
$message = 'This is a test email from XAMPP using sendmail.';
$headers = 'From: romanwoldekidan9@gmail.com' . "\r\n" .  // Change this to your email
           'Reply-To: bity.kidane@gmail.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>