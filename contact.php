<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['customerName']);
    $email = htmlspecialchars($_POST['customerEmail']);
    $phone = htmlspecialchars($_POST['customerPhone']);
    $provider = htmlspecialchars($_POST['provider']);
    $dataPackage = htmlspecialchars($_POST['dataPackage']);
    $selectedPlan = htmlspecialchars($_POST['selectedPlan']);
    $selectedPrice = htmlspecialchars($_POST['selectedPrice']);
    
    // Email configuration
    $to = "your-email@domain.com";
    $subject = "New VPN Package Order - $selectedPlan";
    $message = "
    New VPN Package Order Details:
    
    Plan: $selectedPlan
    Data Package: $dataPackage
    Price: Rs $selectedPrice
    Name: $name
    Email: $email
    Phone: $phone
    Current Provider: $provider
    ";
    
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request method";
}
?>