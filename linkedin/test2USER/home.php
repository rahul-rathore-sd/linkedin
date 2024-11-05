<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php"); // Redirect to login page if not logged in
    exit();
}

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

// Fetch the user's data from the database
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // echo "<h2>Welcome, " . htmlspecialchars($row['name']) . "!</h2>";
    // echo "<p>User ID: " . htmlspecialchars($row['id']) . "</p>";
    // echo "<p>Email: " . htmlspecialchars($row['email']) . "</p>";

    // Display the user's image
    if ($row['image']) {
        // echo "<img src='" . htmlspecialchars($row['image']) . "' alt='Profile Image' style='width:150px;height:150px;'>";
    } else {
        echo "<p>No profile image available.</p>";
    }
} else {
    echo "User data not found.";
}

$conn->close();
?>

<!-- Logout link -->
<!-- <a href="logout.php">Logout</a> -->

<!-- =================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Linkedin | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- material icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle" />
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <div class="d-flex align-items-center" style="width: 1115px; margin-top: 5px;">
            <!-- div 1 start -->
            <div class="d-flex" style="width: 500px;">
                <h2><a href="#">Linkedin</a></h2>
                <input type="search" name=""
                    style="width: 230px; height: 35px; border-radius: 5px; margin-left: 20px; margin-top: 5px;"
                    placeholder="Search..." id="">
            </div>
            <!-- div 1 end -->
            <div class="d-flex justify-content-end align-items-center" style="width: 600px;">
                <div><a href="index.php">Home</a></div>
                <div style="margin-left: 10px;"><a href="index.php">Messaging</a></div>
                <div style="margin-left: 10px;"><a href="index.php">Notifications</a></div>
                <div style="margin-left: 10px;"><a href="logout.php">Logout</a></div>

                <!-- <div style="margin-left: 10px;"><a href="register.php">Register</a></div> -->

            </div>


        </div>
        <!-- navbar end -->
    </div>
    <div class="container" style="margin-top: 20px;">
        <!-- main div -->
        <div class="main d-flex justify-content-between" style="width: 1115px; height: 500px; background-color: white;">
            <!-- left div start -->
            <div class="left" style="width: 260px;  margin-right:15px">
                <div class="card" style="width: 250px;">
                    <?php
                    $servername = "localhost";
                    $username = "root"; // Replace with your database username
                    $password = ""; // Replace with your database password
                    $dbname = "user_db";
                    // Database connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch logged-in user's data
                    $user_id = $_SESSION['user_id']; // Replace this with session user ID
                    $userQuery = $conn->query("SELECT username, email FROM users WHERE id = $user_id");
                    $userData = $userQuery->fetch_assoc();
                    ?>

                    <div class="user-profile">

                    </div>


                    <!-- <img src="./images/profile.jpg" style="width: 249px; " class="card-img-top" alt="..."> -->
                    <?php
                    // Display the user's image
                    if ($row['image']) {
                        echo "<img src='" . htmlspecialchars($row['image']) . "' alt='Profile Image' style='width:249px;' class='card-image-top' alt='Background image'>";
                    } else {
                        echo "<p>No profile image available.</p>";
                    }
                    ?>
                    <!-- <img src="./images/account.png" style="width: 90px; border-radius: 50%; margin-top: -80px;"
                        class="card-img-top" alt="..."> -->
                    <div class="d-flex justify-content-center" style="margin-top:-50px;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px"
                            fill="#5f6368">
                            <path
                                d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z" />
                        </svg>
                        <?php
                        // Display the user's image profile picture
                        // if ($row['image']) {
                        //     echo "<img src='" . htmlspecialchars($row['image']) . "' alt='Profile Image' style='width:90px; border-radius:50%; ' class='card-image-top' alt='profile picture'>";
                        // } else {
                        //     echo "<p>No profile image available.</p>";
                        // }
                        ?>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $userData['username']; ?></h2>
                        </h5>
                        <h6>Email: <?php echo $userData['email']; ?></h6>
                        <p class="card-text"><span>
                                Bio: upcoming fullstack developer.
                            </span> <br>
                            <span> state: delhi</span> <br>

                        </p>
                    </div>
                </div>
            </div>
            <!-- left div end -->
            <!-- middle div start -->
            <div class="middle" style="width: 520px; margin-right:15px">
                <!-- Posts creating area -->
                <div>
                    <div class="" style="border: 0.1px solid black; border-radius: 5px;">
                        <div class="container" style="margin-top: 10px;">
                            <!-- <img src="./images/account.png" style="width: 50px; border-radius: 50%;"
                                class="card-img-top" alt="..."> -->
                            <?php
                            // Display the user's image
                            if ($row['image']) {
                                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='Profile Image' style='width:50px; border-radius: 20%; height:40px;' class='card-image-top' alt='profile picture image'>";
                            } else {
                                echo "<p>No profile image available.</p>";
                            }
                            ?>
                            <!-- ================== -->
                           <div> <form action="create_post.php" method="post" enctype="multipart/form-data">
                                <textarea name="content" placeholder="Share your thoughts..." required></textarea><br>
                                <input type="file" name="image"><br>
                                <input type="submit" value="Post">
                            </form></div>

                            <!-- ================== -->
                            <!-- <input type="search" name="" style="width: 430px; height: 45px; border-radius: 20px;" -->
                                <!-- placeholder="Start a post..." id=""> -->
                        </div>
                        <div class="d-flex justify-content-evenly" style="margin-top:10px; margin-bottom: 10px;">
                            <div>media</div>
                            <div>event</div>
                            <div>write article</div>
                        </div>
                    </div>

                    <hr>
                    <!-- creating posts -->
                    <div>
                        <!-- post 1 -->
                        <div class="container post1"
                            style="border: 0.1px solid black; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
                            <div class=" d-flex" style="margin-top:10px;">
                                <img src="./images/account.png" style="width: 50px; border-radius: 50%;"
                                    class="card-img-top" alt="...">
                                <div>
                                    <h5>username</h5>

                                    <span>time of creation</span>
                                </div>
                            </div>
                            <p style="margin-top:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi
                                cupiditate, dolor eius
                                ratione sint eum provident itaque rerum, quia voluptatem quis exercitationem! Quisquam
                                eaque consectetur consequuntur ad quam laboriosam sunt dolores. Necessitatibus
                                architecto id enim natus reprehenderit distinctio earum cum voluptatibus illum
                                doloremque, cumque illo animi a iure quibusdam.</p>
                            <!-- image if available. -->
                            <img src="./images/profile.jpg" style="width: 495px;" alt="">

                            <hr>
                            <div class="d-flex justify-content-around" style="margin-bottom:10px;">
                                <div>Like</div>
                                <div>Comment</div>
                                <div>Share</div>
                            </div>
                        </div>
                        <!-- post 1 end -->
                        <!-- post 2 -->
                        <div class="container post1"
                            style="border: 0.1px solid black; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
                            <div class=" d-flex" style="margin-top:10px;">
                                <img src="./images/account.png" style="width: 50px; border-radius: 50%;"
                                    class="card-img-top" alt="...">
                                <div>
                                    <h5>username</h5>

                                    <span>time of creation</span>
                                </div>
                            </div>
                            <p style="margin-top:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi
                                cupiditate, dolor eius
                                ratione sint eum provident itaque rerum, quia voluptatem quis exercitationem! Quisquam
                                eaque consectetur consequuntur ad quam laboriosam sunt dolores. Necessitatibus
                                architecto id enim natus reprehenderit distinctio earum cum voluptatibus illum
                                doloremque, cumque illo animi a iure quibusdam.</p>
                            <!-- image if available. -->
                            <img src="./images/profile.jpg" style="width: 495px;" alt="">

                            <hr>
                            <div class="d-flex justify-content-around" style="margin-bottom:10px;">
                                <div>Like</div>
                                <div>Comment</div>
                                <div>Share</div>
                            </div>
                        </div>
                        <!-- post 2 end -->
                        <!-- post 3 -->
                        <div class="container post1"
                            style="border: 0.1px solid black; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
                            <div class=" d-flex" style="margin-top:10px;">
                                <img src="./images/account.png" style="width: 50px; border-radius: 50%;"
                                    class="card-img-top" alt="...">
                                <div>
                                    <h5>username</h5>

                                    <span>time of creation</span>
                                </div>
                            </div>
                            <p style="margin-top:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi
                                cupiditate, dolor eius
                                ratione sint eum provident itaque rerum, quia voluptatem quis exercitationem! Quisquam
                                eaque consectetur consequuntur ad quam laboriosam sunt dolores. Necessitatibus
                                architecto id enim natus reprehenderit distinctio earum cum voluptatibus illum
                                doloremque, cumque illo animi a iure quibusdam.</p>
                            <!-- image if available. -->
                            <img src="./images/profile.jpg" style="width: 495px;" alt="">

                            <hr>
                            <div class="d-flex justify-content-around" style="margin-bottom:10px;">
                                <div>Like</div>
                                <div>Comment</div>
                                <div>Share</div>
                            </div>
                        </div>
                        <!-- post 3 end -->
                        <!-- post 4 -->
                        <div class="container post1"
                            style="border: 0.1px solid black; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
                            <div class=" d-flex" style="margin-top:10px;">
                                <img src="./images/account.png" style="width: 50px; border-radius: 50%;"
                                    class="card-img-top" alt="...">
                                <div>
                                    <h5>username</h5>

                                    <span>time of creation</span>
                                </div>
                            </div>
                            <p style="margin-top:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi
                                cupiditate, dolor eius
                                ratione sint eum provident itaque rerum, quia voluptatem quis exercitationem! Quisquam
                                eaque consectetur consequuntur ad quam laboriosam sunt dolores. Necessitatibus
                                architecto id enim natus reprehenderit distinctio earum cum voluptatibus illum
                                doloremque, cumque illo animi a iure quibusdam.</p>
                            <!-- image if available. -->
                            <img src="./images/profile.jpg" style="width: 495px;" alt="">

                            <hr>
                            <div class="d-flex justify-content-around" style="margin-bottom:10px;">
                                <div>Like</div>
                                <div>Comment</div>
                                <div>Share</div>
                            </div>
                        </div>
                        <!-- post 4 end -->
                        <!-- post 5 -->
                        <div class="container post1"
                            style="border: 0.1px solid black; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
                            <div class=" d-flex" style="margin-top:10px;">
                                <img src="./images/account.png" style="width: 50px; border-radius: 50%;"
                                    class="card-img-top" alt="...">
                                <div>
                                    <h5>username</h5>

                                    <span>time of creation</span>
                                </div>
                            </div>
                            <p style="margin-top:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi
                                cupiditate, dolor eius
                                ratione sint eum provident itaque rerum, quia voluptatem quis exercitationem! Quisquam
                                eaque consectetur consequuntur ad quam laboriosam sunt dolores. Necessitatibus
                                architecto id enim natus reprehenderit distinctio earum cum voluptatibus illum
                                doloremque, cumque illo animi a iure quibusdam.</p>
                            <!-- image if available. -->
                            <img src="./images/profile.jpg" style="width: 495px;" alt="">

                            <hr>
                            <div class="d-flex justify-content-around" style="margin-bottom:10px;">
                                <div>Like</div>
                                <div>Comment</div>
                                <div>Share</div>
                            </div>
                        </div>
                        <!-- post 5 end -->
                        <!-- post 6 -->
                        <div class="container post1"
                            style="border: 0.1px solid black; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
                            <div class=" d-flex" style="margin-top:10px;">
                                <img src="./images/account.png" style="width: 50px; border-radius: 50%;"
                                    class="card-img-top" alt="...">
                                <div>
                                    <h5>username</h5>

                                    <span>time of creation</span>
                                </div>
                            </div>
                            <p style="margin-top:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi
                                cupiditate, dolor eius
                                ratione sint eum provident itaque rerum, quia voluptatem quis exercitationem! Quisquam
                                eaque consectetur consequuntur ad quam laboriosam sunt dolores. Necessitatibus
                                architecto id enim natus reprehenderit distinctio earum cum voluptatibus illum
                                doloremque, cumque illo animi a iure quibusdam.</p>
                            <!-- image if available. -->
                            <img src="./images/profile.jpg" style="width: 495px;" alt="">

                            <hr>
                            <div class="d-flex justify-content-around" style="margin-bottom:10px;">
                                <div>Like</div>
                                <div>Comment</div>
                                <div>Share</div>
                            </div>
                        </div>
                        <!-- post 6 end -->

                    </div>
                    <!-- creating posts end -->

                </div>
                <!-- Posts creating area end -->
            </div>
            <!-- middle div end -->
            <!-- right div start -->
            <div class="right" style="width: 300px;">
                <div class="container" style="border: 0.1px solid black; border-radius: 5px; min-height: 10;">
                    <h5>Online</h5>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>
                    <span>username online</span> <br>

                </div>
            </div>
            <!-- right div end -->

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>