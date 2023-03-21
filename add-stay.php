<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
include 'db/_dbConnect.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$stayid = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    $title = (string) $_POST['staytitle'];
    $placeID = (int) $_POST['place'];
    $desc = (string) $_POST['staydesc'];

    $sql = "INSERT INTO `stay` (`placeid`, `staytitle`, `staydesc`) VALUES ('{$placeID}', '{$title}', '{$desc}')";

    mysqli_query($connect, $sql);
}
 else if (isset($_POST['update'])){
    $id = $_POST['id'] == $stayid ? (int)$_POST['id'] : false;
    $title = (string) $_POST['staytitle'];
    $desc = (string) $_POST['staydesc'];

    if ($id == false){
        return "Invalid ID";
    }

    $sql = "UPDATE `stay` SET staytitle = '{$title}', staydesc = '{$desc}' WHERE `stayid` = '{$id}'";
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


    
    <!-- Add Place Form Starts Here -->
    <div class="container">
    <h2 class="display-6 fw-bold">Add a <span style="color:#ff5d5d">New Stay</span></h2>
    <hr>
    <?php 
    if ($action == 'edit' && $stayid != null){

        $sql = "SELECT * FROM `stay` WHERE `stayid` = '{$stayid}'";
        $result = mysqli_query($connect, $sql);
        $stay = mysqli_fetch_assoc($result);

        ?>
        
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $stay['stayid'] ?>">
            <div class="mb-3">
                <label class="form-label fw-bold">stay Title</label>
                <input type="text" class="form-control" name="staytitle" value="<?php echo $stay['staytitle'] ?>">
            </div>   
            <div class="mb-3">
                <label class="form-label fw-bold">Stay Description</label>
                <textarea class="form-control" rows="5" name="staydesc"><?php echo $stay['staydesc'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <button type="button" class="btn btn-dark">Back to Dashboard</button>
        </form>

        <?php
        } else {
        ?>

        <form action="#" method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Stay Title</label>
                <input type="text" class="form-control" name="staytitle">
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
                <label class="form-label fw-bold">Stay Description</label>
                <textarea class="form-control" rows="5" name="staydesc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="button" class="btn btn-dark">Back to Dashboard</button>
        </form>

        <?php } ?>

    </div>
    <!-- Add Place Form Ends Here -->

    <!-- Table Start -->
    <br>
    <div class="container">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Stay Name</th>
            <th scope="col">Stay Dec</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $sql = "SELECT * FROM `stay`";
                $result = mysqli_query($connect, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <tr>
                        <th scope="row">'. $row['stayid'] .'</th>
                        <td>'. $row['staytitle'] .'</td>
                        <td>'. $row['staydesc'] .'</td>
                        <td>
                            <button class="btn btn-info">
                                <a href="?action=edit&id='. $row['stayid'] .'" class="text-light text-decoration-none">Update</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="delete.php?type=stay&id='. $row['stayid'] .'" class="text-light text-decoration-none">Delete</a>
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
     <!-- Table End -->



    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>