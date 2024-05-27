<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['user_email'];
    $subject = "Solera | Waitlist";
    $message = "sup";
    $headers = "From: Solera.Ownership@outlook.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
