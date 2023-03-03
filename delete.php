<?php
   include 'db/_dbConnect.php'; 
   if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "Delete from `user` where uid = $id";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            // echo 'Deleted successfully';
            header('location: user-display.php');
        }
        else{
            die(mysqli_error($connect));
        }
   }

?>