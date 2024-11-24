<?php
// Replace with your actual email address
$to = "alfred@alfredplumbing.co.za";

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Construct email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Subject can be set dynamically or as a fixed value
$subject = "New Contact Form Submission"; // Or use $_POST['subject']

// Prepare email body
$body = "You have received a new message from your contact form:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Subject: $subject\n";
$body .= "Message:\n$message";

// Send email using PHP's mail() function
if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
} else {
    echo "<script>alert('Message failed to send. Please try again.');</script>";
}
?>
