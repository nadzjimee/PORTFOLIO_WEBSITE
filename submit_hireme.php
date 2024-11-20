<?php
// Process the form if it's a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Optionally, save data to the database or send email here
    // Example: Save to database (if needed)

    // Redirect to the thank you page after form submission
    header("Location: thankyou.php?submitted=true");
    exit();  // Always call exit() after header redirection to ensure no further processing
}
?>
