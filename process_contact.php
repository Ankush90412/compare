<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you would typically process the form data, e.g., save it to a database or send an email.
    // For this demo, we'll just display the submitted information.

    echo "<h1>Thank you for contacting us, $name!</h1>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
    echo '<p><a href="contact.php">Go back to the contact form</a></p>';
} else {
    echo "<h1>Invalid Request</h1>";
}
?>
