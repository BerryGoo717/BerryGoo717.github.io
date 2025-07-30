<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
    $to = "juliepao@seas.upenn.edu";
    $subject = "New Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    mail($to, $subject, $body, $headers);
    header("Location: thankyou.html");
    echo "The email($email_subject) was successfully sent.";
    exit();
}
?>