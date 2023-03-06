<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
include 'db/_dbConnect.php';



if(isset($_POST['submit'])){
    $title = (string) $_POST['title'];
    $placeID = (int) $_POST['place'];
    $desc = (string) $_POST['desc'];

    $sql = "INSERT INTO `activity` (`placeid`, `activitytitle`, `activitydesc`) VALUES ('{$placeID}', '{$title}', '{$desc}')";

    mysqli_query($connect, $sql);
}

$sql = "SELECT `placeid`, `placetitle` FROM `place`";
$result = mysqli_query($connect, $sql);
$places = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours & Travel Guide</title>
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
    
    <!-- Add Place Form Starts Here -->
    <div class="container">
    <h2 class="display-6 fw-bold">Add a <span style="color:#ff5d5d">New Activity</span></h2>
    <hr>
        <form action="#" method="POST">
        <div class="mb-3">
            <label class="form-label fw-bold">Activity Title</label>
            <input type="text" class="form-control" name="title">
        </div>   
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="place">
            <option selected>Select Place</option>

            <?php
            foreach($places as $place){
                echo '<option value="'. $place['placeid'] .'">'. $place['placetitle'] .'</option>';
            }
            ?>

            <!-- <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option> -->
        </select>
        <div class="mb-3">
            <label class="form-label fw-bold">Activity Description</label>
            <textarea class="form-control" rows="5"  name="desc"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="button" class="btn btn-dark">Back to Dashboard</button>
        </form>
    </div>
    <!-- Add Place Form Ends Here -->

    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>