<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle validation error
        echo "Please fill out all the fields.";
    } else {
        // Process the form data (you can add your own logic here)
        // For example, you can send an email with the form data
        $to = "your-email@example.com";
        $subject = "New Message from Contact Form";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for your message. We'll get back to you soon!";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>