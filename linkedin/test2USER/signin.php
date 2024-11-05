<!-- <form action="login.php" method="post"> -->
<!-- <label>Username or Email:</label>
    <input type="text" name="username_email" required><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Login">
</form> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Linkedin | signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <style>
       
    </style>
</head>

<body background="background-color:#FBFBFB;">
    <div class="container-fluid">
        <nav class="navbar ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!-- <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> -->
                    Linkedin
                </a>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="d-flex align-items-center justify-content-center" style=" width: 1100px; min-height: 0px">
            <div class="shadow p-3 mb-5 rounded"
                style="padding: 45px; width: 550; background-color: #FBFBFB;">
                <div class="d-flex flex-column" style="margin-bottom: 20px;">
                    <div class="d-flex flex-row"><h3>Sign in</h3></div>
                    <div><span>Stay updated on your professional world.</span></div>
                </div>
                <form action="login.php" method="post">
                    <div class="mb-3 d-flex justify-content-center">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email or phone"
                            aria-describedby="emailHelp" name="username_email" required
                            style="width: 250px; height: 50px;" />

                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="password" required style="width: 250px; height: 50px;" />
                    </div>
                    <div class="">
                        <a href="#"><b>Forgot password?</b></a>
                    </div>
                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-primary " value="Login"
                            style="width: 250px; height: 50px; margin-top: 22px; border-radius: 30px;">
                            Signin
                        </button>

                    </div>
                </form>
                <br>
                <div class="row d-flex justify-content-center">
                    <hr style="width: 100px;"> or
                    <hr style="width: 100px;">
                </div>
                <div>
                    <span style="font-size: 12px;">
                        By clicking Continue, you agree to LinkedIn’s <a href="#">User <br> Agreement</a> ,
                        <a href="#">Privacy Policy</a> , and <a href="#">Cookie Policy</a>.
                    </span>
                </div>
                
            </div>
            
        </div>
        <br>
            <div class="d-flex justify-content-center" style="margin-top: -60px;">
                <span>New to Linkedin?</span>
                <a href="signup.php" style="margin-left: 10px; font-weight: 500;">Join now</a>
            </div>

            <div class="text-center">
                <span style="font-weight:750;">LinkedIn</span> <span style="font-size: 12px;">&copy 2024    User Agrement    privacy policy    community guidelines   cookie policy   Copyright policy  Send Feedback  languge</span>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>