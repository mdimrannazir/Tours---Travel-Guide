<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
include 'db/_dbConnect.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$activityid = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    $title = (string) $_POST['activitytitle'];
    $placeID = (int) $_POST['place'];
    $desc = (string) $_POST['activitydesc'];

    $sql = "INSERT INTO `activity` (`placeid`, `activitytitle`, `activitydesc`) VALUES ('{$placeID}', '{$title}', '{$desc}')";

    mysqli_query($connect, $sql);
}
 else if (isset($_POST['update'])){
    $id = $_POST['id'] == $activityid ? (int)$_POST['id'] : false;
    $title = (string) $_POST['activitytitle'];
    $desc = (string) $_POST['activitydesc'];

    if ($id == false){
        return "Invalid ID";
    }

    $sql = "UPDATE `activity` SET activitytitle = '{$title}', activitydesc = '{$desc}' WHERE `activityid` = '{$id}'";
    $action = "";

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

    <div class="container">
    <h2 class="display-6 fw-bold">Add a <span style="color:#ff5d5d">New Activity</span></h2>
    <hr>
    <?php 
    if ($action == 'edit' && $activityid != null){

        $sql = "SELECT * FROM `activity` WHERE `activityid` = '{$activityid}'";
        $result = mysqli_query($connect, $sql);
        $activity = mysqli_fetch_assoc($result);

        ?>
        
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $activity['activityid'] ?>">
            <div class="mb-3">
                <label class="form-label fw-bold">activity Title</label>
                <input type="text" class="form-control" name="activitytitle" value="<?php echo $activity['activitytitle'] ?>">
            </div>   
            <div class="mb-3">
                <label class="form-label fw-bold">activity Description</label>
                <textarea class="form-control" rows="5" name="activitydesc"><?php echo $activity['activitydesc'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <button type="button" class="btn btn-dark">Back to Dashboard</button>
        </form>

        <?php
        } else {
        ?>

        <form action="#" method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Activity Title</label>
                <input type="text" class="form-control" name="activitytitle">
            </div>  
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="place">
            <option selected>Select Place</option>
            <?php
            foreach($places as $place){
                echo '<option value="'. $place['placeid'] .'">'. $place['placetitle'] .'</option>';
            }
            ?> 
            </select>
            <div class="mb-3">
                <label class="form-label fw-bold">Activity Description</label>
                <textarea class="form-control" rows="5" name="activitydesc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="button" class="btn btn-dark">Back to Dashboard</button>
        </form>

        <?php } ?>

    </div>
    <br>
    <!-- Add table Start -->
    <div class="container">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Activity Name</th>
            <th scope="col">Activity Dec</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $sql = "SELECT * FROM `activity`";
                $result = mysqli_query($connect, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <tr>
                        <th scope="row">'. $row['activityid'] .'</th>
                        <td>'. $row['activitytitle'] .'</td>
                        <td>'. $row['activitydesc'] .'</td>
                        <td>
                            <button class="btn btn-info">
                                <a href="?action=edit&id='. $row['activityid'] .'" class="text-light text-decoration-none">Update</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="delete.php?type=activity&id='. $row['activityid'] .'" class="text-light text-decoration-none">Delete</a>
                            </button>
                        </td>

                        </tr>
                        ';
                    }
                }
            ?> 
        </tbody>
        </table>
    </div>
    <!-- Add table End -->
    
    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>