<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'youremail@example.com'; // Replace with your email address
    $subject = 'New Contact Form Submission'; // Subject of the email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $email_body = "You have received a new message from the contact form on your website.\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n\n";
    $email_body .= "Message:\n" . $message . "\n";

    // Send the email
    mail($to, $subject, $email_body, $headers);

    // Redirect to a thank-you page or display a message
    echo "Thank you for your message! We will be in touch with you shortly.";
}
?>