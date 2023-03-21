<?php
    $login = false;
    $showError = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){   
        include 'db/_dbConnect.php';
        $uid = $_POST["uid"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM `user` where uid='$uid'";
            $result = mysqli_query($connect, $sql);
            $num = mysqli_num_rows($result);


            if($num==1){
                while ($row = mysqli_fetch_assoc($result)) {
                    if (md5($password) === $row['password']) {
                        $login = true;
                        session_start();
                        $_SESSION['loggedin'] = true;  
                        $_SESSION['uid'] = $uid;
                        header("location: dashboard.php");
                    }
                }
            }
            else{
                $showError = "Invalid Credentials";
            }
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
    if($login){
        echo '
        <div class="alert alert-success" role="alert">
            Great! You are logged in.
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




<section id="loginPage">
        <br>
        <form action="login.php" method="POST">
            <div class="loginContainer">
                <label class="noAccount">
                    Don't have an account? <a href="signup.php">Signup</a>
                </label>
                <div class="imgcontainer">
                    <img src="images/avatar.webp" alt="Avatar" class="avatar">
                </div>
                <label for="uname"><b>User ID</b></label>
                <input type="text" placeholder="ID here..." name="uid" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <a href="dashboard.php?uid='<?php $uid ?>'"><button type=" submit" class="btnLogin">Login</button></a>
                <br>
                <label>
                    <input type="checkbox" checked="checked"> Remember me
                </label>
            </div>
        </form>
    </section>
    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>