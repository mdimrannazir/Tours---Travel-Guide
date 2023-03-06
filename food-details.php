<?php
include 'db/_dbConnect.php';

$foodID = (int) $_GET['id'];

// Stay Data
$sql = "SELECT * FROM `food` WHERE `foodid` = '{$foodID}'";
$result = mysqli_query($connect, $sql);
$food = mysqli_fetch_assoc($result);

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

    <!-- Hero Gallery Starts -->
    <div class="container">
        <div class="image-container">
            <img src="https://picsum.photos/seed/picsum/200/300" alt="Left Image" class="left-img">
            <div class="right-imgs">
                <img src="https://picsum.photos/seed/picsum/200/300" alt="Right Image 1">
                <img src="https://picsum.photos/seed/picsum/200/300" alt="Right Image 2">
            </div>
        </div>
    </div>
    <!-- Place Details Starts -->
        <div class="container">
            <h2 class="display-6 fw-bold"><?php echo $food['foodtitle'] ?></h2>
            <div><?php echo $food['fooddesc'] ?></div>
        </div>
    <!-- Place Details Starts -->


    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>