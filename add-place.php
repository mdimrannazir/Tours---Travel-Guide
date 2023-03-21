<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
include 'db/_dbConnect.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$placeID = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    $title = (string) $_POST['title'];
    $desc = (string) $_POST['desc'];

    $sql = "INSERT INTO `place` (`placetitle`, `placedesc`) VALUES ('{$title}', '{$desc}')";

    mysqli_query($connect, $sql);
} else if (isset($_POST['update'])){
    $id = $_POST['id'] == $placeID ? (int)$_POST['id'] : false;
    $title = (string) $_POST['title'];
    $desc = (string) $_POST['desc'];

    if ($id == false){
        return "Invalid ID";
    }

    $sql = "UPDATE `place` SET placetitle = '{$title}', placedesc = '{$desc}' WHERE `placeid` = '{$id}'";

    mysqli_query($connect, $sql);
}


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
    <h2 class="display-6 fw-bold">Add a <span style="color:#ff5d5d">New Place</span></h2>
    <hr>
    <?php 
    if ($action == 'edit' && $placeID != null){

        $sql = "SELECT * FROM `place` WHERE `placeid` = '{$placeID}'";
        $result = mysqli_query($connect, $sql);
        $place = mysqli_fetch_assoc($result);

        ?>
        
        <form action="#" method="POST">
            <input type="hidden" name="id" value="<?php echo $place['placeid'] ?>">
            <div class="mb-3">
                <label class="form-label fw-bold">Place Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $place['placetitle'] ?>">
            </div>   
            <div class="mb-3">
                <label class="form-label fw-bold">Place Description</label>
                <textarea class="form-control" rows="5" name="desc"><?php echo $place['placedesc'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <button onclick="window.location.href = 'dashboard.php';" type="button" class="btn btn-dark">Back to Dashboard</button>
        </form>

        <?php
        } else {
        ?>

        <form action="#" method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Place Title</label>
                <input type="text" class="form-control" name="title">
            </div>   
            <div class="mb-3">
                <label class="form-label fw-bold">Place Description</label>
                <textarea class="form-control" rows="5" name="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button onclick="window.location.href = 'dashboard.php';" type="button" class="btn btn-dark">Back to Dashboard</button>
        </form>

        <?php } ?>

    </div>
    <!-- Add Place Form Ends Here -->
    <br>
    <div class="container">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Place Name</th>
            <th scope="col">Place Dec</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $sql = "SELECT * FROM `place`";
                $result = mysqli_query($connect, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <tr>
                        <th scope="row">'. $row['placeid'] .'</th>
                        <td>'. $row['placetitle'] .'</td>
                        <td>'. $row['placedesc'] .'</td>
                        <td>
                            <button class="btn btn-info">
                                <a href="?action=edit&id='. $row['placeid'] .'" class="text-light text-decoration-none">Update</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="delete.php?type=place&id='. $row['placeid'] .'" class="text-light text-decoration-none">Delete</a>
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



    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>