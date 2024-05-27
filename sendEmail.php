<?php>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Solera.Ownership@outlook.com";
    $subject = "Solera | Waitlist";
    $message = "sup";
    $headers = "From: your-email@example.com"; // Update with your email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
<?php>
