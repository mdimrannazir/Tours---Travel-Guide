<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
include 'db/_dbConnect.php';
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
        <!-- Navigation starts here -->
        <?php
        require 'php/nav.php';
    ?>
    <!-- Navigation Ends here -->
    
        <!-- Admin general message starts here -->
            <?php
            $id =$_SESSION['uid'];
            $sql = "SELECT fullname FROM `user` WHERE uid = $id";
            $result = mysqli_query($connect, $sql);

            while (($row = mysqli_fetch_assoc($result))) {
                $name = $row['fullname'];
                echo '
                
                    <div class="alert alert-info text-center" role="alert">
                        Hey ' . strtoupper($name) . ', Welcome to Tours & Travel Guide Admin Panel!
                    </div>
                
                ';
            }
            ?>
    <!-- Admin general message ends here -->



    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>