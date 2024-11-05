<?php
// Start the session to use session variables
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $username_email = $conn->real_escape_string($_POST['username_email']);
    $password = $_POST['password'];

    // Prepare SQL query to check if the user exists with either username or email
    $sql = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();
        
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Password matches, create session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            // Redirect to the home page
            header("Location: home.php");
            exit();
        } else {
            // Incorrect password
            echo "Invalid username/email or password.";
        }
    } else {
        // User not found
        echo "Invalid username/email or password.";
    }
}

$conn->close();
?>
