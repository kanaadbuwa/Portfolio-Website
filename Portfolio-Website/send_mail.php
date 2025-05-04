<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

// Mailgun API key and domain
$mg = Mailgun::create('YOUR_MAILGUN'); // Replace with 
$domain = "YOUR_DOMAIN"; // Your Mailgun domain (e.g., "sandbox123.mailgun.org")

// Form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Send email using Mailgun API
$mg->messages()->send($domain, [
    'from'    => $email,
    'to'      => 'your-email@example.com', // Replace with your email
    'subject' => "New Contact Form Submission",
    'text'    => "Name: $name\nEmail: $email\nMessage: $message"
]);

echo "Message sent successfully!";
?>

//Install Mailguns PHP SDK
//In your project directory, use Composer to install Mailgun:
//composer require mailgun/mailgun-php



