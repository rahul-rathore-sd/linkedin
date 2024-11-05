<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch posts
$sql = "SELECT posts.post_id, posts.content, posts.image, posts.created_at, users.name 
        FROM posts 
        JOIN users ON posts.user_id = users.id 
        ORDER BY posts.created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['content']) . "</p>";
        if ($row['image']) {
            echo "<img src='" . htmlspecialchars($row['image']) . "' style='width:200px;'><br>";
        }
        echo "<small>Posted on: " . $row['created_at'] . "</small><br>";

        // Like button
        echo "<form action='like_post.php' method='post'>
                <input type='hidden' name='post_id' value='" . $row['post_id'] . "'>
                <input type='submit' value='Like'>
              </form>";

        // Comment form
        echo "<form action='comment_post.php' method='post'>
                <input type='hidden' name='post_id' value='" . $row['post_id'] . "'>
                <textarea name='comment_text' placeholder='Add a comment...'></textarea>
                <input type='submit' value='Comment'>
              </form>";

        // Display comments for the post
        $post_id = $row['post_id'];
        $comment_sql = "SELECT comments.comment_text, users.name FROM comments 
                        JOIN users ON comments.user_id = users.id 
                        WHERE comments.post_id = '$post_id' 
                        ORDER BY comments.created_at";
        $comment_result = $conn->query($comment_sql);

        if ($comment_result->num_rows > 0) {
            while ($comment = $comment_result->fetch_assoc()) {
                echo "<p><strong>" . htmlspecialchars($comment['name']) . ":</strong> " . htmlspecialchars($comment['comment_text']) . "</p>";
            }
        }
        echo "</div><hr>";
    }
} else {
    echo "No posts available.";
}

$conn->close();
?>
