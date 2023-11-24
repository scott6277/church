<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Specify the recipient email address
    $to = "mungaijohn6277@gmail.com";

    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Compose the email message
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    $success = mail($to, $subject, $body, $headers);

    // Display a pop-up message
    echo '<script>alert("Message sent, thank you!");</script>';

    // Optionally, you can redirect back to the contact page
    echo '<script>window.location.href = "contact.html";</script>';
    exit();
}

?>
