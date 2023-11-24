<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $city = $_POST["city"];
    $eaddress = $_POST["eaddress"];
    $phone = $_POST["phone"];
    $contact = $_POST["contact"];

    // Compose the email message
    $message = "New Member Registration:\n";
    $message .= "First Name: $fname\n";
    $message .= "Last Name: $lname\n";
    $message .= "Address 1: $address1\n";
    $message .= "Address 2: $address2\n";
    $message .= "County: $state\n";
    $message .= "Postal Code: $zip\n";
    $message .= "Town: $city\n";
    $message .= "Email Address: $eaddress\n";
    $message .= "Phone: $phone\n";
    $message .= "Preferred way to contact: $contact\n";

    // Specify the recipient email address
    $to = "mungaijohn6277@gmail.com";

    // Set the subject of the email
    $subject = "New Member Registration";

    // Additional headers
    $headers = "From: $eaddress";

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    // Display a pop-up message
    echo '<script>alert("Member registration submitted, thank you!");</script>';

    // Optionally, you can redirect back to the registration page
    echo '<script>window.location.href = "registration_page.html";</script>';
    exit();
}

?>
