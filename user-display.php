<?php
    include 'db/_dbConnect.php';
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
    <br><br>
    <div class="container">
        <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">Sno</th>
            <th scope="col">Full Name</th>
            <th scope="col">User ID</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Date</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

           
                <!-- $sql = "SELECT * FROM `user`";
                $result = mysqli_query($connect, $sql);
                if($result){
                    $row = mysqli_fetch_assoc($result);
                    echo $row['fullname'];
                } -->
          

            <?php
                $sql = "SELECT * FROM `user`";
                $result = mysqli_query($connect, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $sno = $row['sno'];
                        $name = $row['fullname'];
                        $id = $row['uid'];
                        $email = $row['email'];
                        $pass = $row['password'];
                        $dt = $row['date'];
                        echo '
                        <tr>
                        <th scope="row">'.$sno.'</th>
                        <td>'.$name.'</td>
                        <td>'.$id.'</td>
                        <td>'.$email.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$dt.'</td>
                        <td>
                            <button class="btn btn-info">
                                <a href="update.php" class="text-light text-decoration-none">Update</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">Delete</a>
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