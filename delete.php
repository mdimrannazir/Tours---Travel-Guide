<?php
   include 'db/_dbConnect.php';
   
   if( !isset($_GET['id']) && !isset($_GET['type'])){
    return "Invalid Request";
   }

   $type = $_GET['type'];
   $id = $_GET['id'];

   if( $type === 'place'){
        $sql = "DELETE FROM `place` WHERE placeid = $id";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            // echo 'Deleted successfully';
            header('location: add-place.php');
        }
        else{
            die(mysqli_error($connect));
        }
   }





   else if( $type === 'activity'){
    $sql = "DELETE FROM `activity` WHERE activityid = $id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        // echo 'Deleted successfully';
        header('location: add-activity.php');
    }
    else{
        die(mysqli_error($connect));
    }
}


else if( $type === 'stay'){
    $sql = "DELETE FROM `stay` WHERE stayid = $id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        // echo 'Deleted successfully';
        header('location: add-stay.php');
    }
    else{
        die(mysqli_error($connect));
    }
}


else if( $type === 'food'){
    $sql = "DELETE FROM `food` WHERE foodid = $id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        // echo 'Deleted successfully';
        header('location: add-food.php');
    }
    else{
        die(mysqli_error($connect));
    }
}






   else if ($type === 'user'){
        $sql = "DELETE FROM `user` WHERE uid = $id";
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