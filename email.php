<?php
function checkEmailConfig() {
    // Recipient email address for the test email
    $to_email = 'lars.hanselmann@hotmail.com'; // Replace with your actual email address
 
    // Subject and body of the test email
    $subject = 'Test Email Configuration';
    $body = 'This is a test email to check if the email service is configured properly.';
 
    // Additional headers
    $headers = 'From: info@lhfilmwerk.ch' . "\r\n" .
        'Reply-To: lars.hanselmann@hotmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
 
    // Attempt to send the test email
    if (mail($to_email, $subject, $body, $headers)) {
        return true; // Email sent successfully
    } else {
        return false; // Unable to send email
    }
}
 
// Check email configuration
if (checkEmailConfig()) {
    echo "Email service is configured properly. Test email sent.\n";
} else {
    echo "Error: Email service is not configured or configured incorrectly. Test email not sent.\n";
}
?>