<?php
if(isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $recipient = 'codecvinfo@gmail.com';
    $subject = 'New message from codecv.ie';
    $headers = "From: $full_name <$email>";

    // This part prevents injection attacks
    $full_name = filter_var($full_name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_EMAIL);

    // Send the email
    if (mail($recipient, $subject, $message, $headers)) {
        // Redirect user to thank-you page
        header('Location: thank-you.html');
        exit;
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
