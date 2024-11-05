<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blogger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <div class="d-flex align-items-center" style="width: 1115px; margin-top: 5px;">
            <!-- div 1 start -->
            <div class="d-flex" style="width: 500px;">
                <h2><a href="#">Blogger</a></h2>
                <input type="search" name="" style="width: 230px; height: 35px; border-radius: 5px; margin-left: 20px; margin-top: 5px;"
                placeholder="Search..." id="">
            </div>
            <!-- div 1 end -->
            <div class="d-flex justify-content-end align-items-center" style="width: 600px;">
                <div><a href="index.php">Home</a></div>
                <div style="margin-left: 10px;"><a href="index.php">Messaging</a></div>
                <div style="margin-left: 10px;"><a href="index.php">Notifications</a></div>
                <!-- <div style="margin-left: 10px;"><a href="register.php">Register</a></div> -->
                
            </div>
             
            <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Blogger</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                    </form>
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Messaging</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notifications</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav> -->
        </div>
        <!-- navbar end -->
    </div>
    <div class="container" style="margin-top: 20px;">
        <!-- main div -->
        <div class="main d-flex justify-content-between" style="width: 1115px; height: 500px; background-color: white;">
            <!-- left div start -->
            <div class="left" style="width: 260px;  margin-right:15px">
                <div class="card" style="width: 250px;">

                    <img src="./images/profile.jpg" style="width: 249px; " class="card-img-top" alt="...">
                    <img src="./images/account.png" style="width: 90px; border-radius: 50%; margin-top: -80px;"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">USER NAME</h5>
                        <p class="card-text"><span>
                                Bio: upcoming fullstack developer.
                            </span> <br>
                            <span> state: delhi</span> <br>
                            <span>
                                Experience:
                            </span>
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
                            <img src="./images/account.png" style="width: 50px; border-radius: 50%;" class="card-img-top"
                                alt="...">
                            <input type="search" name="" style="width: 430px; height: 45px; border-radius: 20px;"
                                placeholder="Start a post..." id="">
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

