<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Me - Freelance Illustrator</title>
    <link rel="stylesheet" href="HireMe.css">
</head>
<body>
    <section class="hire-me">
        <div class="container">
            <div class="content">
                <h1>Hire Me</h1>
                <h2>Let's Create Beautiful Art Together</h2>
                <p>I’m a freelance illustrator offering custom illustration services. Let’s work together to bring your creative vision to life with eye-catching artwork.</p>
                <p>Whether you need illustrations for books, marketing campaigns, or personal projects, I can help.</p>
                <p>Feel free to contact me for any inquiries or project discussions.</p>
                
                <div class="contact-info">
                    <p><strong>Email:</strong> Nadzirah@gmail.com</p>
                    <p><strong>Phone:</strong> +0123455602</p>
                </div>
            </div>

            <div class="contact-form">
                <h3>Get in Touch</h3>
                <!-- Updated Form Code Starts Here -->
                <form action="submit_hireme.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="text" name="subject" placeholder="Your Subject" required>
                    <textarea name="message" rows="5" placeholder="Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
                <!-- Updated Form Code Ends Here -->
            </div>
        </div>
    </section>
</body>
</html>
