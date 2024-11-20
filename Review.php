<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Projects - Reviews</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Review.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="Index.php">Home</a>
            <a href="About.php">About</a>
            <a href="Resume.php">Resume</a>
            <a href="Service.php">Service</a>
            <a href="Project.php">Project</a>
            <a href="Review.php" class="active">Review</a>
        </nav>
    </header>

    <section id="reviews" class="reviews-section">
        <h2>Client Reviews & Comments</h2>

        <!-- Comment Form Section -->
        <form action="Review.php" method="POST" class="review-form">
            <h3>Leave a Review</h3>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>

            <label for="rating">Rating</label>
            <select id="rating" name="rating" required>
                <option value="">Select Rating</option>
                <option value="5">5 - Excellent</option>
                <option value="4">4 - Good</option>
                <option value="3">3 - Average</option>
                <option value="2">2 - Poor</option>
                <option value="1">1 - Very Poor</option>
            </select>

            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" rows="4" placeholder="Your feedback" required></textarea>

            <button type="submit" name="submit">Submit Review</button>
        </form>

        <!-- Reviews Display Section -->
        <div id="reviews-container" class="reviews-container">
            <?php
            // Database connection
            $conn = new mysqli("localhost", "root", "", "HireMeDB");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Handle form submission
            if (isset($_POST['submit'])) {
                $name = $conn->real_escape_string($_POST['name']);
                $rating = (int)$_POST['rating'];
                $comment = $conn->real_escape_string($_POST['comment']);

                // Insert review into the database without profile_pic
                $sql = "INSERT INTO reviews (name, rating, comment) VALUES ('$name', $rating, '$comment')";
                $conn->query($sql);
            }

            // Fetch and display reviews
            $sql = "SELECT * FROM reviews ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='review' data-id='{$row['id']}'>";
                    // Removed profile picture display
                    echo "<div class='review-content'>";
                    echo "<h4 class='username'>{$row['name']}</h4>";
                    echo "<p class='rating'>Rating: " . str_repeat('★', $row['rating']) . "</p>";
                    echo "<p class='comment'>{$row['comment']}</p>";
                    echo "<form method='POST' action='Review.php'><button type='submit' name='delete' value='{$row['id']}' class='delete-button'>Delete</button></form>";
                    echo "</div></div>";
                }
            } else {
                echo "<p>No reviews yet. Be the first to leave one!</p>";
            }

            // Delete review if delete button is clicked
            if (isset($_POST['delete'])) {
                $id = (int)$_POST['delete'];
                $conn->query("DELETE FROM reviews WHERE id = $id");
                header("Location: Review.php"); // Refresh to update the list
            }

            $conn->close();
            ?>
        </div>
    </section>
</body>
</html>
