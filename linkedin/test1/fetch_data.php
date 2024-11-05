<?php
// Database connection details
$servername = "localhost";
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "blogger"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data
$sql = "SELECT id, title, content FROM posts";
$result = $conn->query($sql);

// Check if there are results and display them
if ($result->num_rows > 0) {

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "                <div class='container post1'
                            style='border: 0.1px solid black; border-radius: 5px; margin-top:10px; margin-bottom:10px;'>
                            <div class=' d-flex' style='margin-top:10px;'>
                                <img src='./images/account.png' style='width: 50px; border-radius: 50%;'
                                    class='card-img-top' alt='...'>
                                <div>
                                    <h5>" . htmlspecialchars($row["title"]) . "</h5>

                                    <span>time of creation</span>
                                </div>
                            </div>
                            <p style='margin-top:10px;'> ". htmlspecialchars($row["content"]) . "</p>
                            <hr>
                            <div class='d-flex justify-content-around' style='margin-bottom:10px;'>
                                <div>Like</div>
                                <div>Comment</div>
                                <div>Share</div>
                            </div>
                        </div>";
    }
    
} else {
    echo "No records found.";
}

// Close connection
$conn->close();
?>                    