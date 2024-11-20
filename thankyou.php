<?php
// Check if the form was submitted by the redirect
if (!isset($_GET['submitted'])) {
    // If the page was accessed directly without form submission, redirect to the form page
    header("Location: HireMe.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Freelance Illustrator</title>
    <link rel="stylesheet" href="thankyou.css"> <!-- Use same CSS file for consistent styling -->
</head>
<body>
    <section class="thank-you">
        <div class="container">
            <h1>Thank You!</h1>
            <p>Thank you for reaching out and for considering my work. I truly appreciate your interest in my services as a freelance illustrator.</p>
            <p>I will review your message and respond to you via email as soon as possible to discuss your project in further detail.</p>
            <p>Looking forward to the possibility of working together!</p>
            <p><strong>Warm regards,</strong><br>Freelance Illustrator</p>
            <a href="Index.php" class="back-home">Back to Home</a>
        </div>
    </section>
</body>
</html>
