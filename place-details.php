<?php
include 'db/_dbConnect.php';

$placeID = (int) $_GET['id'];

// Place Information
$sql = "SELECT * FROM `place` WHERE `placeid` = '{$placeID}'";
$result = mysqli_query($connect, $sql);
$place = mysqli_fetch_assoc($result);

// Place Stay Data
$sql = "SELECT * FROM `stay` WHERE `placeid` = '{$placeID}'";
$result = mysqli_query($connect, $sql);
$stays = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Place Food Data
$sql = "SELECT * FROM `food` WHERE `placeid` = '{$placeID}'";
$result = mysqli_query($connect, $sql);
$foods = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Place Activity Data
$sql = "SELECT * FROM `activity` WHERE `placeid` = '{$placeID}'";
$result = mysqli_query($connect, $sql);
$activitys = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <img src="https://source.unsplash.com/random/?travel-destination&1" alt="Left Image" class="left-img">
        <div class="right-imgs">
            <img src="https://source.unsplash.com/random/?travel-destination&2" alt="Right Image 1">
            <img src="https://source.unsplash.com/random/?travel-destination&3" alt="Right Image 2">
        </div>
    </div>
    </div>

    <!-- Place Details Starts -->
        <div class="container">
            <h2 class="display-6 fw-bold"><?php echo $place['placetitle'] ?></h2>
            <div><?php echo $place['placedesc'] ?></div>
        </div>
    <!-- Place Details Starts -->
 
<div class="container">
    <br><br>
    <!-- Stay Starts -->
    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-dark">
                        <h3 class="fw-bold">Stay</h3>
                        <p>List of places you can choose to stay in.</p>
                    </div>
            </div>

            <?php
            
            foreach($stays as $stay){
                $url = "https://source.unsplash.com/random/?hotel-room&" . rand(); // Unique URL with the "tour" keyword and a random number
            ?>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="stay-details.php?id=<?php echo $stay['stayid'] ?>" class="text-white">
                    <div class="card bg-dark">
                        <img src="<?php echo $url; ?>" class="card-img pe-auto" alt="..." style="height: 300px;">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white"><?php echo $stay['staytitle'] ?></h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>  
            </div>

            <?php } ?>

        </div>
<!-- Stay Ends -->
<br><br>
<!-- Activities Starts -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-dark">
                        <h3 class="fw-bold">Activities</h3>
                        <p>Things you can do in this location.</p>
                    </div>
            </div>
            <?php
            
            foreach($activitys as $activity){
                $url = "https://source.unsplash.com/random/?activities&" . rand(); // Unique URL with the "tour" keyword and a random number
            ?>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="activity-details.php?id=<?php echo $activity['activityid'] ?>" class="text-white">
                    <div class="card bg-dark">
                        <img src="<?php echo $url; ?>" class="card-img pe-auto" alt="..." style="height: 300px;">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white"><?php echo $activity['activitytitle'] ?></h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>  
            </div>

            <?php } ?>   
        </div>
<!-- Activities Ends -->
<br><br>
<!-- Foods Starts -->
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-dark">
                        <h3  class="fw-bold">Foods</h3>
                        <p>Delicious foods you must try on this place.</p>
                    </div>
            </div>
            <?php
            
            foreach($foods as $food){
                $url = "https://source.unsplash.com/random/?food&" . rand(); // Unique URL with the "tour" keyword and a random number
            ?>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="food-details.php?id=<?php echo $food['foodid'] ?>" class="text-white">
                    <div class="card bg-dark">
                        <img src="<?php echo $url; ?>" class="card-img pe-auto" alt="..." style="height: 300px;">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white"><?php echo $food['foodtitle'] ?></h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>  
            </div>

            <?php } ?>           
            
        </div>
<!-- Foods Ends -->
</div>


    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>