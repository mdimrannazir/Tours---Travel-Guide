<?php
$showAlert = false;
$showError = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        include 'db/_dbConnect.php';
        $fullname = $_POST["fullname"];
        $uid = $_POST["uid"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        
        //check whether the user id exist or not?
        $existSql = "SELECT * FROM user where uid = '$uid'";
        $fireq = mysqli_query($connect, $existSql);

        $numExistRows = mysqli_num_rows($fireq);
        if ($numExistRows > 0) {
            $showError = "User ID already exists, try loggin in!";
            // header("location:login.php");
        } else if ($password == $cpassword) {

            $sql = "INSERT INTO `user` (`fullname`, `uid`, `email`, `password`, `date`) VALUES ('$fullname', '$uid', '$email', '$password', current_timestamp());";
    
            $fireq = mysqli_query($connect, $sql);
            if ($fireq) {
                $showAlert = true;
                header("location:login.php");
            }
        } else $showError = "Password doesn't match, try again carefully!";
    }
    ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootsrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Bootstrap JS & Poppers -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    if($showAlert){
        echo '
        <div class="alert alert-success" role="alert">
            Great! Your account is created. Headover to the login page to login.
        </div>';
    }
    ?>
        <?php
    if($showError){
        echo '
        <div class="alert alert-danger" role="alert">
            Error! '. $showError.'
        </div>';
    }
    ?>
    <!-- Navigation starts here -->
    <?php
        require 'php/nav.php';
    ?>
    <!-- Navigation Ends here -->
    <section id="signUpPage">
        <!-- SignUP Form -->
        <br>
        <div class="loginContainer signupConatiner">
            <form action="signup.php" method="POST">
                <label class="noAccount haveAccount">
                    Already have an account? <a href="login.php">Login</a>
                </label>
                <div class="imgcontainer">
                    <img src="images/avatar.webp" alt="Avatar" class="avatar">
                </div>


                
                <input type="text" placeholder="Enter Full Name" required name="fullname">
                <br>
                
                <input type="text" placeholder="Enter User ID" required name="uid">

                <input type="text" placeholder="Enter Email Address" required name="email">
                
                <input type="password" placeholder="Enter Password" required name="password">
                <input type="password" placeholder="Re-enter Password" required name="cpassword">
                <br>
                <label>
                    <input type="checkbox" checked="checked"> I accept the terms & conditions
                </label>
                <a href="login.php"><button type="submit" class="btnLogin">Register</button></a>
            </form>
        </div>
    </section>
    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>