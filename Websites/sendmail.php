<?php
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

        // Set your email address where you want to receive form submissions
        $to = "suryanshpatsariya02128@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

        // Send the email
        mail($to, $subject, $body);

        // Optionally, redirect to a thank-you page
        header("Location: index.html");
        exit;
    } else {
        echo "Please fill in all required fields.";
    }
}
?>
