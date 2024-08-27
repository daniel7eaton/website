<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check if data is valid
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Your email address (replace with your actual email)
        $to = "daniel7eaton@gmail.com";

        // Subject and email headers
        $subject = "New message from Clear Writes website";
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

        // Email content
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Send the email
        if (mail($to, $subject, $email_content, $headers)) {
            // Success message (you can replace this with a success page or redirection)
            echo "Thank you! Your message has been sent.";
        } else {
            // Error message
            echo "Oops! Something went wrong, and we couldn't send your message.";
        }
    } else {
        echo "Please complete the form and submit again.";
    }
}
?>
