<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'axljhay21@gmail.com';
    $subject = 'New Message from Contact Form';
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<p>Your message has been sent. Thank you!</p>';
    } else {
        echo '<p>Oops! Something went wrong. Please try again later.</p>';
    }
}
?>
